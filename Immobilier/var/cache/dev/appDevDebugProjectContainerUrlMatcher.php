<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // user_user_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'user_user_homepage');
            }

            return array (  '_controller' => 'User\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_user_homepage',);
        }

        // gst_immobilier_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'gst_immobilier_homepage');
            }

            return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gst_immobilier_homepage',);
        }

        if (0 === strpos($pathinfo, '/bien')) {
            // searchBien
            if ('/bien/search' === $pathinfo) {
                return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\FrontController::searchBienAction',  '_route' => 'searchBien',);
            }

            // Almadie
            if ('/bien/almadie' === $pathinfo) {
                return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\FrontController::AlmadieAction',  '_route' => 'Almadie',);
            }

            // Mariste
            if ('/bien/mariste' === $pathinfo) {
                return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\FrontController::MaristeAction',  '_route' => 'Mariste',);
            }

            // resultat
            if ('/bien/reserver_bien' === $pathinfo) {
                return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\FrontController::resultatAction',  '_route' => 'resultat',);
            }

            // SavePro
            if ('/bien/pro' === $pathinfo) {
                return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\FrontController::SaveProAction',  '_route' => 'SavePro',);
            }

        }

        // reserverBien
        if (0 === strpos($pathinfo, '/front/bien/reserver') && preg_match('#^/front/bien/reserver/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserverBien')), array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\FrontController::reserverBienAction',));
        }

        // logup
        if ('/front/bien/logup' === $pathinfo) {
            return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\FrontController::logupAction',  '_route' => 'logup',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/list')) {
                // list
                if ('/admin/list' === $pathinfo) {
                    return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::listAction',  '_route' => 'list',);
                }

                // listbienpro
                if ('/admin/listbienpro' === $pathinfo) {
                    return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::listbienproAction',  '_route' => 'listbienpro',);
                }

                // ListreservePro
                if ('/admin/listreservePro' === $pathinfo) {
                    return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::ListreserveProAction',  '_route' => 'ListreservePro',);
                }

                if (0 === strpos($pathinfo, '/admin/listereserve')) {
                    // Listreserve
                    if ('/admin/listereserve' === $pathinfo) {
                        return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::ListreserveAction',  '_route' => 'Listreserve',);
                    }

                    // etatreservation
                    if (preg_match('#^/admin/listereserve(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'etatreservation')), array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::etatreservationAction',));
                    }

                }

            }

            // Listlocalite
            if ('/admin/localite' === $pathinfo) {
                return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::ListlocaliteAction',  '_route' => 'Listlocalite',);
            }

            // recharge
            if ('/admin/recharge' === $pathinfo) {
                return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::rechargeAction',  '_route' => 'recharge',);
            }

            // Listtype
            if ('/admin/type' === $pathinfo) {
                return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::ListtypeAction',  '_route' => 'Listtype',);
            }

            // termeContrat
            if (0 === strpos($pathinfo, '/admin/terme') && preg_match('#^/admin/terme/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'termeContrat')), array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::termeContratAction',));
            }

            // detailreserver
            if (0 === strpos($pathinfo, '/admin/detail') && preg_match('#^/admin/detail/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailreserver')), array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::detailreserverAction',));
            }

            // saveContrat
            if (0 === strpos($pathinfo, '/admin/save') && preg_match('#^/admin/save/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'saveContrat')), array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::saveContratAction',));
            }

            // validContrat
            if (0 === strpos($pathinfo, '/admin/valid') && preg_match('#^/admin/valid/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'validContrat')), array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::validContratAction',));
            }

            // veil
            if ('/admin/veil' === $pathinfo) {
                return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::veilAction',  '_route' => 'veil',);
            }

            if (0 === strpos($pathinfo, '/admin/pdf')) {
                // pdf0
                if (0 === strpos($pathinfo, '/admin/pdf0') && preg_match('#^/admin/pdf0/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pdf0')), array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::pdf0Action',));
                }

                // pdf
                if (preg_match('#^/admin/pdf/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pdf')), array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::pdfAction',));
                }

                // pdf1
                if ('/admin/pdf1' === $pathinfo) {
                    return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::pdf1Action',  '_route' => 'pdf1',);
                }

            }

            // ajoutBien
            if ('/admin/ajoutbien' === $pathinfo) {
                return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\AdminController::ajoutBienAction',  '_route' => 'ajoutBien',);
            }

            // easyadmin
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'easyadmin');
                }

                return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
            }

            // admin
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/API')) {
            // gst_immobilier_api_add
            if ('/API/add' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_gst_immobilier_api_add;
                }

                return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\APIController::addAction',  '_route' => 'gst_immobilier_api_add',);
            }
            not_gst_immobilier_api_add:

            // gst_immobilier_api_all
            if ('/API/all' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_gst_immobilier_api_all;
                }

                return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\APIController::allAction',  '_route' => 'gst_immobilier_api_all',);
            }
            not_gst_immobilier_api_all:

            // gst_immobilier_api_edit
            if ('/API/edit' === $pathinfo) {
                return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\APIController::editAction',  '_route' => 'gst_immobilier_api_edit',);
            }

            if (0 === strpos($pathinfo, '/API/update')) {
                // gst_immobilier_api_update
                if ('/API/update' === $pathinfo) {
                    return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\APIController::updateAction',  '_route' => 'gst_immobilier_api_update',);
                }

                // gst_immobilier_api_delete
                if ('/API/update' === $pathinfo) {
                    return array (  '_controller' => 'GST\\ImmobilierBundle\\Controller\\APIController::deleteAction',  '_route' => 'gst_immobilier_api_delete',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
