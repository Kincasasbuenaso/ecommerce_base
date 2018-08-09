<?php
/*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class AddressController extends AddressControllerCore
{

    /**
     * Set default medias for this controller
     */
    public function setMedia()
    {
        parent::setMedia();
        $this->addJS(array(
            _PS_JS_DIR_.'cities.js'
        ));
    }

    /**
     * Initialize address controller
     * @see FrontController::init()
     */
    public function init()
    {
       FrontController::init();
        
        if (Tools::isSubmit('ajax')) {
            if (Tools::isSubmit('method')) {
                switch (Tools::getValue('method')) {
                    case 'getCities':
                        if ($this->ajax && !empty(Tools::getValue('id_state')))
                            $this->id_state = Tools::getValue('id_state');
                            $this->assignCities();
                        break;
                    default :
                        break;
                }
            }
        }

        // Get address ID
        $id_address = 0;
        if ($this->ajax && Tools::isSubmit('type')) {
            if (Tools::getValue('type') == 'delivery' && isset($this->context->cart->id_address_delivery)) {
                $id_address = (int)$this->context->cart->id_address_delivery;
            } elseif (Tools::getValue('type') == 'invoice' && isset($this->context->cart->id_address_invoice)
                        && $this->context->cart->id_address_invoice != $this->context->cart->id_address_delivery) {
                $id_address = (int)$this->context->cart->id_address_invoice;
            }
        } else {
            $id_address = (int)Tools::getValue('id_address', 0);
        }

        // Initialize address
        if ($id_address) {
            $this->_address = new Address($id_address);
            if (Validate::isLoadedObject($this->_address) && Customer::customerHasAddress($this->context->customer->id, $id_address)) {
                if (Tools::isSubmit('delete')) {
                    if ($this->_address->delete()) {
                        if ($this->context->cart->id_address_invoice == $this->_address->id) {
                            unset($this->context->cart->id_address_invoice);
                        }
                        if ($this->context->cart->id_address_delivery == $this->_address->id) {
                            unset($this->context->cart->id_address_delivery);
                            $this->context->cart->updateAddressId($this->_address->id, (int)Address::getFirstCustomerAddressId(Context::getContext()->customer->id));
                        }
                        Tools::redirect('index.php?controller=addresses');
                    }
                    $this->errors[] = Tools::displayError('This address cannot be deleted.');
                }
            } elseif ($this->ajax) {
                exit;
            } else {
                Tools::redirect('index.php?controller=addresses');
            }
        }
    }


    /**
     * Assign template vars related to page content
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();

        $this->assignCountries();
        $this->assignVatNumber();
        $this->assignAddressFormat();
        $this->assignCities();

        // Assign common vars
        $this->context->smarty->assign(array(
            'address_validation' => Address::$definition['fields'],
            'one_phone_at_least' => (int)Configuration::get('PS_ONE_PHONE_AT_LEAST'),
            'onr_phone_at_least' => (int)Configuration::get('PS_ONE_PHONE_AT_LEAST'), //retro compat
            'ajaxurl' => _MODULE_DIR_,
            'errors' => $this->errors,
            'token' => Tools::getToken(false),
            'select_address' => (int)Tools::getValue('select_address'),
            'address' => $this->_address,
            'id_address' => (Validate::isLoadedObject($this->_address)) ? $this->_address->id : 0
        ));

        if ($back = Tools::getValue('back')) {
            $this->context->smarty->assign('back', Tools::safeOutput($back));
        }
        if ($mod = Tools::getValue('mod')) {
            $this->context->smarty->assign('mod', Tools::safeOutput($mod));
        }
        if (isset($this->context->cookie->account_created)) {
            $this->context->smarty->assign('account_created', 1);
            unset($this->context->cookie->account_created);
        }

        $this->setTemplate(_PS_THEME_DIR_.'address.tpl');
    }


     protected function assignCities()
    {
        if (Tools::getValue('id_city'))
            $this->id_city = Tools::getValue('id_city');
        elseif (isset($this->_address) && isset($this->_address->id_city) && $this->_address->id_city)
            $this->id_city = $this->_address->id_city;
        else
            $this->id_city = '';
        
        $id_state = isset($this->id_state) && !empty($this->id_state) ? $this->id_state : 313;
        $cities = Cities::getCities($id_state);
        
        $list = '';
        
        if ($cities) {
            foreach ($cities as $city) {
                $selected = ($city['id_city'] === $this->id_city) ? ' selected="selected"' : '';
                $list .= '<option value="'.$city['name'].'"'.$selected.'>'.htmlentities($city['name'], ENT_COMPAT, 'UTF-8').'</option>';
            }
        }
        
        if ($this->ajax) {
            $return = array(
                'hasError'      => (bool)$this->errors,
                'errors'        => $this->errors,
                'data'          => $list
            );
            $this->ajaxDie(Tools::jsonEncode($return));
            
        } else {
            $this->context->smarty->assign(array(
                'cities_list' => $list,
                'cities' => $cities ? $cities : array(),
                'sl_cities' => $this->id_cities,
            ));
        }
    } 

}
