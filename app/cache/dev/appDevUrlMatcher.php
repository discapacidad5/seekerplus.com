<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/app')) {
            // show_banner
            if (0 === strpos($pathinfo, '/app/show-banner') && preg_match('#^/app/show\\-banner/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'show_banner');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_banner')), array (  '_controller' => 'SeekerPlus\\BannerBundle\\Controller\\DefaultController::showAction',));
            }

            // my_ads
            if ($pathinfo === '/app/my-ads') {
                return array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsController::myAdsAction',  '_route' => 'my_ads',);
            }

            // new_ads
            if ($pathinfo === '/app/new-ads') {
                return array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsController::newAdsAction',  '_route' => 'new_ads',);
            }

            // edit_ads
            if (0 === strpos($pathinfo, '/app/edit-ads') && preg_match('#^/app/edit\\-ads/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'edit_ads');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_ads')), array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsController::editAdsAction',));
            }

            // delete_ads
            if (0 === strpos($pathinfo, '/app/delete-ads') && preg_match('#^/app/delete\\-ads/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'delete_ads');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_ads')), array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsController::deleteAdsAction',));
            }

            // renew_ads
            if (0 === strpos($pathinfo, '/app/renew-ads') && preg_match('#^/app/renew\\-ads/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'renew_ads');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'renew_ads')), array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsController::renewAdsAction',));
            }

            // new_ads_product
            if (0 === strpos($pathinfo, '/app/new-ads-product') && preg_match('#^/app/new\\-ads\\-product/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'new_ads_product');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_ads_product')), array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\ProductController::newAdsProductAction',));
            }

            // edit_product_ads
            if (0 === strpos($pathinfo, '/app/edit-product-ads') && preg_match('#^/app/edit\\-product\\-ads/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'edit_product_ads');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_product_ads')), array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\ProductController::editAdsProductAction',));
            }

            // delete_product_ads
            if (0 === strpos($pathinfo, '/app/delete-product-ads') && preg_match('#^/app/delete\\-product\\-ads/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'delete_product_ads');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_product_ads')), array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\ProductController::deleteProductAdsAction',));
            }

            if (0 === strpos($pathinfo, '/app/c')) {
                // ads_city
                if (0 === strpos($pathinfo, '/app/city') && preg_match('#^/app/city/(?P<city>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ads_city');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ads_city')), array (  '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::appCityAction',));
                }

                if (0 === strpos($pathinfo, '/app/category')) {
                    // show_category
                    if (preg_match('#^/app/category/(?P<idCategory>[^/]++)/(?P<idCity>[^/]++)/(?P<range>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_category')), array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsCategoriesController::showAction',));
                    }

                    // show_category_geolocation
                    if (preg_match('#^/app/category/(?P<idCategory>[^/]++)/(?P<idCity>[^/]++)/(?P<latitude>[^/]++)/(?P<longitude>[^/]++)/(?P<range>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_category_geolocation')), array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsCategoriesController::showGeolocationAction',));
                    }

                    // show_category_rated
                    if (0 === strpos($pathinfo, '/app/categoryRated') && preg_match('#^/app/categoryRated/(?P<idCategory>[^/]++)/(?P<idCity>[^/]++)/(?P<range>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_category_rated')), array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsCategoriesController::showRatedAction',));
                    }

                    // show_category_map
                    if (preg_match('#^/app/category/(?P<idCategory>[^/]++)/(?P<idCity>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'show_category_map');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_category_map')), array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsCategoriesController::showMapAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/app/ad')) {
                // show_ad
                if (preg_match('#^/app/ad/(?P<idAd>[^/]++)/(?P<idCity>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_ad')), array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsController::showAction',));
                }

                // show_ad_map
                if (preg_match('#^/app/ad/(?P<idAd>[^/]++)/(?P<idCity>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'show_ad_map');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_ad_map')), array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsController::showMapAction',));
                }

                // adRate
                if (rtrim($pathinfo, '/') === '/app/ad-rate') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'adRate');
                    }

                    return array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsController::RateAction',  '_route' => 'adRate',);
                }

            }

            if (0 === strpos($pathinfo, '/app/search')) {
                // search_ads
                if (rtrim($pathinfo, '/') === '/app/search') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'search_ads');
                    }

                    return array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsSearchController::searchAction',  '_route' => 'search_ads',);
                }

                // search_ads_category
                if (0 === strpos($pathinfo, '/app/search/category') && preg_match('#^/app/search/category/(?P<idCategory>[^/]++)/(?P<idCity>[^/]++)/(?P<range>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'search_ads_category');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_ads_category')), array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsSearchController::searchCategoryAction',));
                }

                // search_save
                if (rtrim($pathinfo, '/') === '/app/search/save') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'search_save');
                    }

                    return array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsSearchController::searchSaveAction',  '_route' => 'search_save',);
                }

            }

            if (0 === strpos($pathinfo, '/app/ad')) {
                // ad_comment
                if (rtrim($pathinfo, '/') === '/app/ad/ad_comment') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ad_comment');
                    }

                    return array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsController::adCommentAction',  '_route' => 'ad_comment',);
                }

                // edit_comment
                if (rtrim($pathinfo, '/') === '/app/ad/edit_comment') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'edit_comment');
                    }

                    return array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsController::editCommentAction',  '_route' => 'edit_comment',);
                }

            }

            // delete_comment
            if (rtrim($pathinfo, '/') === '/app/delete_comment') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'delete_comment');
                }

                return array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsController::deleteCommentAction',  '_route' => 'delete_comment',);
            }

            if (0 === strpos($pathinfo, '/app/ad')) {
                // date_comment
                if (rtrim($pathinfo, '/') === '/app/ads/date_comment') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'date_comment');
                    }

                    return array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsController::dateCommentAction',  '_route' => 'date_comment',);
                }

                // paginationAd
                if (rtrim($pathinfo, '/') === '/app/ad/paginationAd') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'paginationAd');
                    }

                    return array (  '_controller' => 'SeekerPlus\\AdsmanagerBundle\\Controller\\AdsController::paginationAdAction',  '_route' => 'paginationAd',);
                }

            }

        }

        // _security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'UserBundle:Default:Default:logout',  '_route' => '_security_logout',);
        }

        // _facebook_secured
        if (rtrim($pathinfo, '/') === '/secured') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_facebook_secured');
            }

            return array (  '_controller' => 'SeekerPlus\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => '_facebook_secured',);
        }

        // fos_facebook_security_check
        if ($pathinfo === '/fb/login_check') {
            return array (  '_controller' => 'SeekerPlus\\UserBundle\\Controller\\DefaultController::fbLoginCheckAction',  '_route' => 'fos_facebook_security_check',);
        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // app
        if (rtrim($pathinfo, '/') === '/app') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app');
            }

            return array (  '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::appAction',  '_route' => 'app',);
        }

        // contactenos
        if (rtrim($pathinfo, '/') === '/contactenos') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'contactenos');
            }

            return array (  '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::contactenosAction',  '_route' => 'contactenos',);
        }

        // servicios
        if (rtrim($pathinfo, '/') === '/servicios') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'servicios');
            }

            return array (  '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::serviciosAction',  '_route' => 'servicios',);
        }

        // politicasDePrivacidad
        if (rtrim($pathinfo, '/') === '/politicasDePrivacidad') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'politicasDePrivacidad');
            }

            return array (  '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::politicasDePrivacidadAction',  '_route' => 'politicasDePrivacidad',);
        }

        // condicionesDeUso
        if (rtrim($pathinfo, '/') === '/condicionesDeUso') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'condicionesDeUso');
            }

            return array (  '_controller' => 'SeekerPlus\\PagesBundle\\Controller\\DefaultController::condicionesDeUsoAction',  '_route' => 'condicionesDeUso',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }

            // fos_user_security_check
            if ($pathinfo === '/login_check') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/loginfb')) {
                // _security_login
                if ($pathinfo === '/loginfb') {
                    return array('_route' => '_security_login');
                }

                // _security_check
                if ($pathinfo === '/loginfb_check') {
                    return array('_route' => '_security_check');
                }

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        // fos_facebook_channel
        if ($pathinfo === '/channel.html') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_facebook_channel;
            }

            return array (  '_controller' => 'FOS\\FacebookBundle\\Controller\\FacebookController::channelAction',  '_route' => 'fos_facebook_channel',);
        }
        not_fos_facebook_channel:

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
