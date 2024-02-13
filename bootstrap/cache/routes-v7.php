<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::5QlUhhm8Aqr7aoT8',
=======
            '_route' => 'generated::D4VIBx4LCijafmZA',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::2IxKqMQTeL9Y8KQD',
=======
            '_route' => 'generated::baEqvk1KMMS4HCNz',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/refresh_captcha' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::MEUsK8HCc95ehhaR',
=======
            '_route' => 'generated::QlPqbzu7D0DCyqKO',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::njpVjefSMUb9YANi',
=======
            '_route' => 'generated::mgOChRrzPgQK3Epd',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/forgetPassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::y53IOCTx1QMel6xI',
=======
            '_route' => 'generated::V3gjHNhaPhTpfKpI',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::4LWlGtiuXTbPjhm3',
=======
            '_route' => 'generated::awKWaZVDknPsgCbb',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pagenotfound' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notfound',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/userDetails' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::CGjbGDxGI5yxYwkH',
=======
            '_route' => 'generated::RE1zeIqYj9JdK2O4',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/B2CUserDetails' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::IK26DOR5tUqjEiQ8',
=======
            '_route' => 'generated::fdI2C5eiZ3yI6Uka',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::T9yeEpULmJi2HOJB',
=======
            '_route' => 'generated::KBJ2PJ6FjvXmQHWI',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cart/addApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ZJn61v0T09qYCFrz',
=======
            '_route' => 'generated::NYO3xGlhJTn6c2Fh',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cart/getCartItemsApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::jSH3hDArYpbLJKXy',
=======
            '_route' => 'generated::cylOQv97gx39iAEq',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cart/updateQuanityApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::JDZ2vSsT5KoSs6VK',
=======
            '_route' => 'generated::eccg2tD0OAhixGXI',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/viewCart' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::qxmYfyAhrwLDMaVw',
=======
            '_route' => 'generated::SwbbL8MoIr6eAiQe',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::tjqva9yKQVfw8kvL',
=======
            '_route' => 'generated::WqQruXLRtRSGTCDI',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/submitQuotes' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::SGg3BHlHQchhBn75',
=======
            '_route' => 'generated::1fYFP8xj5qKevl4b',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::W1aDtevXeWx6bZay',
=======
            '_route' => 'generated::fvqadT8N4JcqYJWw',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contactSubmit' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::LXSY1TXUAviyOGAN',
=======
            '_route' => 'generated::RTWPsAhUPFb9UJvE',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::TCzs0TLT16T1otOK',
=======
            '_route' => 'generated::m2ESUfZ6tchq05x1',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/agb' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::fu4NYPx1F2NaYhCc',
=======
            '_route' => 'generated::FxU2CedYlQFsf2Ac',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cancelationPolicy' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ikY4ZLFRm0JljND3',
=======
            '_route' => 'generated::88DhPNGSCiNMqfyP',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/Impressum' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::D0DLNzGnzrT8dqQ6',
=======
            '_route' => 'generated::N22fynSOpNRYMqd8',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lieferbedingungen' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::l1wfPrjE9tkZwc2y',
=======
            '_route' => 'generated::bEZeAH9Rjd39W0No',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/poolBuilderRegister' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Zbh5VwCs5LOf6XmG',
=======
            '_route' => 'generated::tLt6FksD2HJAcl38',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::CYpyipNJUlxHofNP',
=======
            '_route' => 'generated::pPeGRc29ksGIW0S5',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/poolBuilderProfile' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::jD3kKvkcVksiiI6S',
=======
            '_route' => 'generated::XdoRCBrYBJTaRfY0',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/poolBuilderClaim&Request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Aug41XfIjimRyWjG',
=======
            '_route' => 'generated::H8pmY3MZGpzCHptE',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/home1' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::2l4X1KqoUkAfWvtk',
=======
            '_route' => 'generated::x6KcgF9EarI2B1Ec',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/offerListingApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xV7XWN98cpA1ziDe',
=======
            '_route' => 'generated::XFLjYUPfnhQ2d5Es',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addOfferApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::mqWE8YawFBVcx6V4',
=======
            '_route' => 'generated::J6Lkab3EkCG4vu8s',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cart/checkoutItemsApiAuthentic' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::JV6tG34ToXm3TXxO',
=======
            '_route' => 'generated::McQwmVz9pIGuu8Mg',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cart/userAddress' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::oVm7KpsHwQ9ndiyw',
=======
            '_route' => 'generated::4CUqgarsmp0qxddR',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profileViewApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::dVpx2ep1XeqyukIw',
=======
            '_route' => 'generated::9OPiSjOgYlYGlFcW',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addPermanentProfileApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ZqulX27yaz2cF83I',
=======
            '_route' => 'generated::x6IpkY5ZyRdzdJKm',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/changePasswordApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::bCcT4zn7VRQ3JZPP',
=======
            '_route' => 'generated::bQZ22gxt1UbSVM9i',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/saveTempAddressApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::eHcqFbulpEGmbvr7',
=======
            '_route' => 'generated::SHGw8FdaO4aHnj5w',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/showTempAddressApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::5csBAWEI9Xw4n7lS',
=======
            '_route' => 'generated::QtXtNJGMoXPEbkps',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/logoutApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ElzXcuJFSihr91Hu',
=======
            '_route' => 'generated::KEYXqinvpDMAN2Ut',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::8wGi3o3xzU0uutvy',
=======
            '_route' => 'generated::dJA6yPvcTqjLXhOb',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cart/addOrder' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::p7bCZfuasEKayqT9',
=======
            '_route' => 'generated::IDGMSnCRvQPP6zBY',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::NkWAyuxqghJpalCw',
=======
            '_route' => 'generated::MrBijlmGa9vVE4d3',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/productList' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::wqEaCPxfWlww61GU',
=======
            '_route' => 'generated::9quys91v7ASZT8be',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/sendOfferMailsToB2C' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::B0euo0QnUhmTdO2R',
=======
            '_route' => 'generated::yAkPeqiqNW5ekNW3',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
=======
      '/api/viewOffersForB2C' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::peVwI1GRu728eNZv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      '/api/categoriesListingApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::LLcMr8FqPtBmjM2s',
=======
            '_route' => 'generated::yGqaxLTnMfCTxomF',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addCategoriesApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::nBbJMWBVC9AIp0Cs',
=======
            '_route' => 'generated::GHEahDAo5VLLxuO4',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/productListingApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Ea9KAuZtAFdg4nmg',
=======
            '_route' => 'generated::lvZonarlcYeT0OBV',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addProduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::wqThUYd8iCznBffn',
=======
            '_route' => 'generated::dnAcXrnh3D0XupvK',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/productImportApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::RtM4jlcd20eDzpCT',
=======
            '_route' => 'generated::7jNqMe4PBOR1XLRY',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/productExport' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::oxwoCToiVmcX6XQW',
=======
            '_route' => 'generated::RmsXZZtrJT7pYB2h',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/getProductCategoryAPI' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::GCcr7o66X69tfZB1',
=======
            '_route' => 'generated::JDOnKDE4kWUyRAH0',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/quatationListingApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::FksDROmsm0TMdHFf',
=======
            '_route' => 'generated::BoGsqJU4JVgmcpP1',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/assignmentListingApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::h4DQNozcVPVStEcc',
=======
            '_route' => 'generated::YhiEMWfyalqwSynV',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addAssignmentsApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::X8X4BfuIQ0BDlINh',
=======
            '_route' => 'generated::wZ74bri4BJjLtmvs',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/deliveryNotesListingApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::PRYtPAEid4Y3DcT4',
=======
            '_route' => 'generated::a0EaMdt0CxW7zLBu',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addDeliveryNotesApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::rIzS6sYiqYYZoydO',
=======
            '_route' => 'generated::uInknvfz3044D0aK',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/editDeliveryNotes' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::aDvyGTsQ5e94XBTN',
=======
            '_route' => 'generated::h50PFgrsnmaF45VA',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/billsListingApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::9hoNJ58D96xhsKOz',
=======
            '_route' => 'generated::O7MXywLYJQzx8tSf',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addbillsApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::SGl4ZRMmk77DFib1',
=======
            '_route' => 'generated::JyxREW4jx5bdnUhE',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/editbills' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::qlEokGRnOfboSrQu',
=======
            '_route' => 'generated::EnOdo8hYvWssiPXq',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/creditsListingApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::CfO3IynMczDt852m',
=======
            '_route' => 'generated::M0mSDULOvSNH85Ky',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addCreditsApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xIHqpu1Tp0kdNJga',
=======
            '_route' => 'generated::mmokm91Vtibnzp6x',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/editCredits' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::bOwk8Loy8q1Jo6ks',
=======
            '_route' => 'generated::GVb1WVgPeTfWajma',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/editClaims' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::GGnIJCfmgFgXvmLW',
=======
            '_route' => 'generated::52qfDTksyKsLd9mm',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customerListingApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::1jDsLU57Gnh29eiN',
=======
            '_route' => 'generated::UkQCPoxNBmcG3nEU',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/updatecustomer' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::gakLfRvT7x6VZj8W',
=======
            '_route' => 'generated::tGdbwCZrZIks0KYd',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/orderListingApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::dxDKOsz8XhTa0gMX',
=======
            '_route' => 'generated::ed43iVYkhesTvpII',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/getOrdersDetailsApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::znRJRIrbO9KULccC',
=======
            '_route' => 'generated::qHC8IlzBaVJFFQTa',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/updateOrderFinalStatusApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::DWIu6Nd2A5IyZO6T',
=======
            '_route' => 'generated::Rq9xKK5lhCF6DZNm',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/couponListingApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::aMHXHUqXqvCNcTgB',
=======
            '_route' => 'generated::G8Mwuz42nMxP8ktH',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/addcouponApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::UUlpnrI6cij9w2EH',
=======
            '_route' => 'generated::P1K1Lwh2ecgK7Zum',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/updateCouponStatusApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Y512MUxWTFKwAGx7',
=======
            '_route' => 'generated::sthbhOqMDQTbOJ2f',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/accountSetting' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::CG8kviUbZjkafsEk',
=======
            '_route' => 'generated::D7RVso97QLKZbHUm',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cart/getCountOfThisProductApi' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::VWT98YpsVPjW7rzf',
=======
            '_route' => 'generated::c9UObP0HLOAK5jsq',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/productPortfolio' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::x94VA4nsfKNFtMYH',
=======
            '_route' => 'generated::JXSSHqeFfFuG4WTD',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cartProducts' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::mt8PaHHo01ovBHz9',
=======
            '_route' => 'generated::CxhBi5NsVND5ePOi',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/productListingNew' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::6kn9zpgBDe7giA0j',
=======
            '_route' => 'generated::YpqpawyD2KGOnh64',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::guAz94nTd43yL55A',
=======
            '_route' => 'generated::RZLMfPLMOjwGdmxl',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/captcha(?|/api(?:/([^/]++))?(*:36)|(?:/([^/]++))?(*:57))|/api/(?|p(?|assword/reset/([^/]++)(*:99)|ro(?|fileViewByIdApi/([^/]++)(*:135)|ductListing/([^/]++)(*:163)))|se(?|lectedB2CUserDetails/([^/]++)(*:207)|ttings/([^/]++)(*:230))|c(?|a(?|rt/deleteCartProductsApi/([^/]++)(*:280)|tegoriesListing/([^/]++)(*:312))|reditsListing/([^/]++)(*:343)|laimsListing/([^/]++)(*:372)|o(?|n(?|tactListing/([^/]++)(*:408)|nection/([^/]++)(*:432))|uponListing/([^/]++)(*:461))|ustomer(?|Listing/([^/]++)(*:496)|Addressbook([^/]++)(*:523))|heckOut/([^/]++)(*:548))|qu(?|otes/([^/]++)(*:575)|atationListing/([^/]++)(*:606))|tempAddressDelete/([^/]++)(*:641)|wareHouseProductList/([^/]++)(*:678)|a(?|d(?|min_dashboard/([^/]++)(*:716)|d(?|Offer/([^/]++)(*:742)|C(?|ategories/([^/]++)(*:772)|redits/([^/]++)(*:795)|laims/([^/]++)(*:817))|Product/([^/]++)(*:842)|Assignment/([^/]++)(*:869)|DeliveryNotes/([^/]++)(*:899)|bills/([^/]++)(*:921)|co(?|ntact/([^/]++)(*:948)|upon/([^/]++)(*:969))|Suppliers/([^/]++)(*:996)))|ssignmentListing/([^/]++)(*:1031))|o(?|fferListing/([^/]++)(*:1065)|rderListing/([^/]++)(*:1094))|edit(?|Offer/([^/]+)([^/]++)(*:1132)|Product/([^/]++)(*:1157)|Assignment/([^/]++)(*:1185)|customer/([^/]++)/([^/]++)(*:1220)|order/([^/]++)/([^/]++)(*:1252))|OffersPdfdownload/([^/]++)(*:1288)|del(?|ete(?|Ca(?|tegory/([^/]++)(*:1329)|rtProducts/([^/]++)(*:1357))|customer/([^/]++)(*:1384))|iveryNotesListing/([^/]++)(*:1420))|billsListing/([^/]++)(*:1451)|S(?|uppliersListing/([^/]++)(*:1488)|tatistics/([^/]++)(*:1515))|newsLetter/([^/]++)(*:1544)|Product(?|detailPage/([^/]++)/([^/]++)(*:1591)|sByCategories/([^/]++)(*:1622))|updateCartProducts/([^/]++)(*:1659)))/?$}sDu',
    ),
    3 => 
    array (
      36 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::lqFMSEs1xDN8ZQHg',
=======
            '_route' => 'generated::TdYQjQ03MJ2yzwB6',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
            'config' => NULL,
          ),
          1 => 
          array (
            0 => 'config',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      57 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::qASuvwjT1jR7ZKe6',
=======
            '_route' => 'generated::j01O9I2atVMVOeyN',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
            'config' => NULL,
          ),
          1 => 
          array (
            0 => 'config',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      99 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::XXkLOPR2AFwhmAzP',
=======
            '_route' => 'generated::JcwU81eVLCvzwmq3',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      135 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::DdX244ZJkqqktaOw',
=======
            '_route' => 'generated::fbVNYTUWr7x7rXvy',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      163 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::J747nSE35LItRHtQ',
=======
            '_route' => 'generated::Xierdv4DOwLkfQ0t',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      207 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::2acno8qHpMwVOFGp',
=======
            '_route' => 'generated::gh9YSbTfqasPqQEV',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      230 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::RaHiHoTo60uzhX29',
=======
            '_route' => 'generated::VBXm2XGPz2NgUAcW',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      280 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::4zNYC7OhNIxyQZMC',
=======
            '_route' => 'generated::ncmPsLNqWDXyTcIs',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      312 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::V0qVYLCZGHve8ARr',
=======
            '_route' => 'generated::sZ83A0EV4YmcVnyE',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      343 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::26su3akzBK6hm6wF',
=======
            '_route' => 'generated::NWqPBg3EOpR9WOnV',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      372 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::wuPlt8qEM5HlDltm',
=======
            '_route' => 'generated::bNi0P8gBvJjPqYya',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      408 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::IbOZAGvMnOIg8752',
=======
            '_route' => 'generated::Nx9EpQ8m5CCIKx4a',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      432 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::94KooSPxSQNqZcdE',
=======
            '_route' => 'generated::3MEN9EaBcL6fxF9a',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      461 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::4B4xEZXvDqLFhSEk',
=======
            '_route' => 'generated::SWxi5Oxbrav38x1r',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      496 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::DvhRgR2MUf4vzJf0',
=======
            '_route' => 'generated::cZNSierL7qa2fP1Z',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      523 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::mncaNsTQqUvSLn9n',
=======
            '_route' => 'generated::Wf2cozMbwhPFRfea',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      548 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::BtTKPV29NnkzkOBu',
=======
            '_route' => 'generated::0Rx19Nd0jv6npLWH',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'email',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      575 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::s4dHRbiqKGJ4mVRf',
=======
            '_route' => 'generated::SkRPjjXMF9Dq9ToD',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      606 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::AgTaUDnTlsOlY1cs',
=======
            '_route' => 'generated::Pg3vt7oFrQ9l1COm',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      641 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ulgxNfpPNDRbPuEh',
=======
            '_route' => 'generated::9tWKvLEg5tIpR3u4',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      678 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::DLINgTeW7Rk20MwT',
=======
            '_route' => 'generated::3bxlqUUSW1NckhFt',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      716 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::u7l5VUV0eJKh78yK',
=======
            '_route' => 'generated::iMVpirbxX5YjBaMR',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      742 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::4BE0KFqgzPzyyUEX',
=======
            '_route' => 'generated::rQeFNlboTowg2Y8f',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      772 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::y1TFAMXJy3bKZJ8z',
=======
            '_route' => 'generated::Wb3GJNUBdcb0m0GY',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      795 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::pLrPXiWCYUe4Yy5B',
=======
            '_route' => 'generated::fUCk6wdJigXE9sjW',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      817 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ZkRKAsVU8tMaQYaR',
=======
            '_route' => 'generated::ut4CXb8q51eyoTga',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      842 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::tL5HL87POHtvJo3i',
=======
            '_route' => 'generated::uLYqxJWQo2rq7Vr7',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      869 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::FYrUEjvdGaxxdLhM',
=======
            '_route' => 'generated::Pq8BrOECI6LECY74',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      899 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::cOWy5JI0kz4yU4HP',
=======
            '_route' => 'generated::fwv2IpT9Yzq0Ghox',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      921 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ON3V7Ex8EJhpCmHF',
=======
            '_route' => 'generated::oG5O2y0xYsxhlCfm',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      948 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::HF9fUuDt6edRC8tX',
=======
            '_route' => 'generated::rWelbACGwtqQsFeT',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      969 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::HfVNaFoKB5OchgUX',
=======
            '_route' => 'generated::ZTsMS3UhfuiXkXiK',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      996 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::9DHv3ZWerKceP4kx',
=======
            '_route' => 'generated::aeg5TpSxI682dpdT',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1031 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::WdWz3Bc68qeZKahe',
=======
            '_route' => 'generated::hj5O0C2lablYuOgd',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1065 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::BV5jVm5LOZQMpemN',
=======
            '_route' => 'generated::QN3Dw7mqNhYJFSCY',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1094 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::KQryixx4RCLdBVc9',
=======
            '_route' => 'generated::JgLb5T7bSgQrba7k',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1132 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::cG3CBeAytZb5OXYf',
=======
            '_route' => 'generated::4guPwj9wGUiojz6B',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1157 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::mPYJPzNigQi5Y3rk',
=======
            '_route' => 'generated::sazenWwzGm8cPHOw',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1185 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::bHizXRYtUz9HyNBs',
=======
            '_route' => 'generated::A234fAggIc0N627r',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1220 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::B9KuLjnkzC69G19D',
=======
            '_route' => 'generated::wT1CMzva6VDoouL8',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1252 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::yi9SMSeWoLWGyhJy',
=======
            '_route' => 'generated::QUDzvTvw7pnrBbQJ',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1288 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::9Ece0CxZidbVYJbd',
=======
            '_route' => 'generated::F77BBP5B60sc0XDB',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'offerId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1329 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::q5PE2Uv1rRk1Zjdo',
=======
            '_route' => 'generated::itS6NNA0BMCr9r80',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1357 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Yx6yn7zpZO5E8idY',
=======
            '_route' => 'generated::lpsjIMdn59IxJw31',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1384 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::dEUWgi6pl4LLNoLN',
=======
            '_route' => 'generated::nCzbByxmA1845cmQ',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1420 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xD78yGZTohJMqG2J',
=======
            '_route' => 'generated::prEDF6bviqftgbmL',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1451 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::eNijKfm7lgL9zDxc',
=======
            '_route' => 'generated::7WNq8Ol4bhPSUIOa',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1488 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::5DB1Qvx5wIg2AwOQ',
=======
            '_route' => 'generated::mVA7duRBb4UVBFeT',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1515 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::5LwxQo6LLqyBZALt',
=======
            '_route' => 'generated::wUfkz6MXvP1duvfw',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1544 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::TB6iVglcN61U7Wlc',
=======
            '_route' => 'generated::ZqvefFhxpDy5yDwu',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1591 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::8oAlGWZe28wAABta',
=======
            '_route' => 'generated::gZ8x8zpkvroJQB6m',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'product_id',
            1 => 'product_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1622 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xYYNQwJyXt2D1Vut',
=======
            '_route' => 'generated::vPab7AbrZeKYTLcs',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'Kategorie_Name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1659 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::GtbuZsu5BLmXzu8m',
=======
            '_route' => 'generated::LyxMlFdWbqKJ5oaI',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lqFMSEs1xDN8ZQHg' => 
=======
    'generated::TdYQjQ03MJ2yzwB6' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'captcha/api/{config?}',
      'action' => 
      array (
        'uses' => '\\Mews\\Captcha\\CaptchaController@getCaptchaApi',
        'controller' => '\\Mews\\Captcha\\CaptchaController@getCaptchaApi',
        'middleware' => 
        array (
          0 => 'web',
        ),
<<<<<<< HEAD
        'as' => 'generated::lqFMSEs1xDN8ZQHg',
=======
        'as' => 'generated::TdYQjQ03MJ2yzwB6',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::qASuvwjT1jR7ZKe6' => 
=======
    'generated::j01O9I2atVMVOeyN' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'captcha/{config?}',
      'action' => 
      array (
        'uses' => '\\Mews\\Captcha\\CaptchaController@getCaptcha',
        'controller' => '\\Mews\\Captcha\\CaptchaController@getCaptcha',
        'middleware' => 
        array (
          0 => 'web',
        ),
<<<<<<< HEAD
        'as' => 'generated::qASuvwjT1jR7ZKe6',
=======
        'as' => 'generated::j01O9I2atVMVOeyN',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5QlUhhm8Aqr7aoT8' => 
=======
    'generated::D4VIBx4LCijafmZA' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\loginController@registerForm',
        'controller' => 'App\\Http\\Controllers\\api\\loginController@registerForm',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::5QlUhhm8Aqr7aoT8',
=======
        'as' => 'generated::D4VIBx4LCijafmZA',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2IxKqMQTeL9Y8KQD' => 
=======
    'generated::baEqvk1KMMS4HCNz' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\loginController@submitRegistration',
        'controller' => 'App\\Http\\Controllers\\api\\loginController@submitRegistration',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::2IxKqMQTeL9Y8KQD',
=======
        'as' => 'generated::baEqvk1KMMS4HCNz',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::MEUsK8HCc95ehhaR' => 
=======
    'generated::QlPqbzu7D0DCyqKO' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/refresh_captcha',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\loginController@refreshCaptcha',
        'controller' => 'App\\Http\\Controllers\\api\\loginController@refreshCaptcha',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::MEUsK8HCc95ehhaR',
=======
        'as' => 'generated::QlPqbzu7D0DCyqKO',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::njpVjefSMUb9YANi' => 
=======
    'generated::mgOChRrzPgQK3Epd' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\loginController@index',
        'controller' => 'App\\Http\\Controllers\\api\\loginController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::njpVjefSMUb9YANi',
=======
        'as' => 'generated::mgOChRrzPgQK3Epd',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::y53IOCTx1QMel6xI' => 
=======
    'generated::V3gjHNhaPhTpfKpI' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/forgetPassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\loginController@forgetPassword',
        'controller' => 'App\\Http\\Controllers\\api\\loginController@forgetPassword',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::y53IOCTx1QMel6xI',
=======
        'as' => 'generated::V3gjHNhaPhTpfKpI',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::XXkLOPR2AFwhmAzP' => 
=======
    'generated::JcwU81eVLCvzwmq3' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\loginController@passwordResetFrom',
        'controller' => 'App\\Http\\Controllers\\api\\loginController@passwordResetFrom',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::XXkLOPR2AFwhmAzP',
=======
        'as' => 'generated::JcwU81eVLCvzwmq3',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4LWlGtiuXTbPjhm3' => 
=======
    'generated::awKWaZVDknPsgCbb' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\loginController@passwordReset',
        'controller' => 'App\\Http\\Controllers\\api\\loginController@passwordReset',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::4LWlGtiuXTbPjhm3',
=======
        'as' => 'generated::awKWaZVDknPsgCbb',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notfound' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pagenotfound',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\loginController@pagenotfound',
        'controller' => 'App\\Http\\Controllers\\api\\loginController@pagenotfound',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'notfound',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CGjbGDxGI5yxYwkH' => 
=======
    'generated::RE1zeIqYj9JdK2O4' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/userDetails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\loginController@userDetails',
        'controller' => 'App\\Http\\Controllers\\api\\loginController@userDetails',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::CGjbGDxGI5yxYwkH',
=======
        'as' => 'generated::RE1zeIqYj9JdK2O4',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IK26DOR5tUqjEiQ8' => 
=======
    'generated::fdI2C5eiZ3yI6Uka' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/B2CUserDetails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\loginController@B2CUserDetails',
        'controller' => 'App\\Http\\Controllers\\api\\loginController@B2CUserDetails',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IK26DOR5tUqjEiQ8',
=======
        'as' => 'generated::fdI2C5eiZ3yI6Uka',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2acno8qHpMwVOFGp' => 
=======
    'generated::gh9YSbTfqasPqQEV' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/selectedB2CUserDetails/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\loginController@selectedB2CUserDetails',
        'controller' => 'App\\Http\\Controllers\\api\\loginController@selectedB2CUserDetails',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::2acno8qHpMwVOFGp',
=======
        'as' => 'generated::gh9YSbTfqasPqQEV',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::T9yeEpULmJi2HOJB' => 
=======
    'generated::KBJ2PJ6FjvXmQHWI' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@home',
        'controller' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@home',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::T9yeEpULmJi2HOJB',
=======
        'as' => 'generated::KBJ2PJ6FjvXmQHWI',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZJn61v0T09qYCFrz' => 
=======
    'generated::NYO3xGlhJTn6c2Fh' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/cart/addApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CartController@addToCart',
        'controller' => 'App\\Http\\Controllers\\api\\CartController@addToCart',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZJn61v0T09qYCFrz',
=======
        'as' => 'generated::NYO3xGlhJTn6c2Fh',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::jSH3hDArYpbLJKXy' => 
=======
    'generated::cylOQv97gx39iAEq' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cart/getCartItemsApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CartController@getCartItems',
        'controller' => 'App\\Http\\Controllers\\api\\CartController@getCartItems',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::jSH3hDArYpbLJKXy',
=======
        'as' => 'generated::cylOQv97gx39iAEq',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JDZ2vSsT5KoSs6VK' => 
=======
    'generated::eccg2tD0OAhixGXI' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/cart/updateQuanityApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CartController@updateQuantityOfItems',
        'controller' => 'App\\Http\\Controllers\\api\\CartController@updateQuantityOfItems',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::JDZ2vSsT5KoSs6VK',
=======
        'as' => 'generated::eccg2tD0OAhixGXI',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4zNYC7OhNIxyQZMC' => 
=======
    'generated::ncmPsLNqWDXyTcIs' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/cart/deleteCartProductsApi/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CartController@deleteCartProducts',
        'controller' => 'App\\Http\\Controllers\\api\\CartController@deleteCartProducts',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::4zNYC7OhNIxyQZMC',
=======
        'as' => 'generated::ncmPsLNqWDXyTcIs',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::qxmYfyAhrwLDMaVw' => 
=======
    'generated::SwbbL8MoIr6eAiQe' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/viewCart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CartController@viewCart',
        'controller' => 'App\\Http\\Controllers\\api\\CartController@viewCart',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::qxmYfyAhrwLDMaVw',
=======
        'as' => 'generated::SwbbL8MoIr6eAiQe',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tjqva9yKQVfw8kvL' => 
=======
    'generated::WqQruXLRtRSGTCDI' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CartController@checkout',
        'controller' => 'App\\Http\\Controllers\\api\\CartController@checkout',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::tjqva9yKQVfw8kvL',
=======
        'as' => 'generated::WqQruXLRtRSGTCDI',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::s4dHRbiqKGJ4mVRf' => 
=======
    'generated::SkRPjjXMF9Dq9ToD' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quotes/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CartController@quotesForm',
        'controller' => 'App\\Http\\Controllers\\api\\CartController@quotesForm',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::s4dHRbiqKGJ4mVRf',
=======
        'as' => 'generated::SkRPjjXMF9Dq9ToD',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::SGg3BHlHQchhBn75' => 
=======
    'generated::1fYFP8xj5qKevl4b' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/submitQuotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CartController@SubmitQuotes',
        'controller' => 'App\\Http\\Controllers\\api\\CartController@SubmitQuotes',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::SGg3BHlHQchhBn75',
=======
        'as' => 'generated::1fYFP8xj5qKevl4b',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::W1aDtevXeWx6bZay' => 
=======
    'generated::fvqadT8N4JcqYJWw' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\staticPageController@contact',
        'controller' => 'App\\Http\\Controllers\\api\\staticPageController@contact',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::W1aDtevXeWx6bZay',
=======
        'as' => 'generated::fvqadT8N4JcqYJWw',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LXSY1TXUAviyOGAN' => 
=======
    'generated::RTWPsAhUPFb9UJvE' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/contactSubmit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\staticPageController@contactSubmit',
        'controller' => 'App\\Http\\Controllers\\api\\staticPageController@contactSubmit',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::LXSY1TXUAviyOGAN',
=======
        'as' => 'generated::RTWPsAhUPFb9UJvE',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TCzs0TLT16T1otOK' => 
=======
    'generated::m2ESUfZ6tchq05x1' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\staticPageController@about',
        'controller' => 'App\\Http\\Controllers\\api\\staticPageController@about',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::TCzs0TLT16T1otOK',
=======
        'as' => 'generated::m2ESUfZ6tchq05x1',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::fu4NYPx1F2NaYhCc' => 
=======
    'generated::FxU2CedYlQFsf2Ac' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/agb',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\staticPageController@agb',
        'controller' => 'App\\Http\\Controllers\\api\\staticPageController@agb',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::fu4NYPx1F2NaYhCc',
=======
        'as' => 'generated::FxU2CedYlQFsf2Ac',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ikY4ZLFRm0JljND3' => 
=======
    'generated::88DhPNGSCiNMqfyP' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cancelationPolicy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\staticPageController@cancelationPolicy',
        'controller' => 'App\\Http\\Controllers\\api\\staticPageController@cancelationPolicy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ikY4ZLFRm0JljND3',
=======
        'as' => 'generated::88DhPNGSCiNMqfyP',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::D0DLNzGnzrT8dqQ6' => 
=======
    'generated::N22fynSOpNRYMqd8' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/Impressum',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\staticPageController@Impressum',
        'controller' => 'App\\Http\\Controllers\\api\\staticPageController@Impressum',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::D0DLNzGnzrT8dqQ6',
=======
        'as' => 'generated::N22fynSOpNRYMqd8',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::l1wfPrjE9tkZwc2y' => 
=======
    'generated::bEZeAH9Rjd39W0No' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/lieferbedingungen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\staticPageController@lieferbedingungen',
        'controller' => 'App\\Http\\Controllers\\api\\staticPageController@lieferbedingungen',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::l1wfPrjE9tkZwc2y',
=======
        'as' => 'generated::bEZeAH9Rjd39W0No',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Zbh5VwCs5LOf6XmG' => 
=======
    'generated::tLt6FksD2HJAcl38' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/poolBuilderRegister',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\PoolBuilder@poolBuilderRegister',
        'controller' => 'App\\Http\\Controllers\\api\\PoolBuilder@poolBuilderRegister',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Zbh5VwCs5LOf6XmG',
=======
        'as' => 'generated::tLt6FksD2HJAcl38',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CYpyipNJUlxHofNP' => 
=======
    'generated::pPeGRc29ksGIW0S5' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/poolBuilderRegister',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\PoolBuilder@submitpoolBuilderRegistration',
        'controller' => 'App\\Http\\Controllers\\api\\PoolBuilder@submitpoolBuilderRegistration',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::CYpyipNJUlxHofNP',
=======
        'as' => 'generated::pPeGRc29ksGIW0S5',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::jD3kKvkcVksiiI6S' => 
=======
    'generated::XdoRCBrYBJTaRfY0' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/poolBuilderProfile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\PoolBuilder@poolBuilderProfile',
        'controller' => 'App\\Http\\Controllers\\api\\PoolBuilder@poolBuilderProfile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::jD3kKvkcVksiiI6S',
=======
        'as' => 'generated::XdoRCBrYBJTaRfY0',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Aug41XfIjimRyWjG' => 
=======
    'generated::H8pmY3MZGpzCHptE' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/poolBuilderClaim&Request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\PoolBuilder@poolBuilderClaim',
        'controller' => 'App\\Http\\Controllers\\api\\PoolBuilder@poolBuilderClaim',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Aug41XfIjimRyWjG',
=======
        'as' => 'generated::H8pmY3MZGpzCHptE',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2l4X1KqoUkAfWvtk' => 
=======
    'generated::x6KcgF9EarI2B1Ec' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/home1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@home1',
        'controller' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@home1',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::2l4X1KqoUkAfWvtk',
=======
        'as' => 'generated::x6KcgF9EarI2B1Ec',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xV7XWN98cpA1ziDe' => 
=======
    'generated::XFLjYUPfnhQ2d5Es' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/offerListingApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\OfferController@offerListing',
        'controller' => 'App\\Http\\Controllers\\api\\OfferController@offerListing',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xV7XWN98cpA1ziDe',
=======
        'as' => 'generated::XFLjYUPfnhQ2d5Es',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::mqWE8YawFBVcx6V4' => 
=======
    'generated::J6Lkab3EkCG4vu8s' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addOfferApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\OfferController@addOfferApi',
        'controller' => 'App\\Http\\Controllers\\api\\OfferController@addOfferApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::mqWE8YawFBVcx6V4',
=======
        'as' => 'generated::J6Lkab3EkCG4vu8s',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JV6tG34ToXm3TXxO' => 
=======
    'generated::McQwmVz9pIGuu8Mg' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cart/checkoutItemsApiAuthentic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CartController@getCartItems',
        'controller' => 'App\\Http\\Controllers\\api\\CartController@getCartItems',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::JV6tG34ToXm3TXxO',
=======
        'as' => 'generated::McQwmVz9pIGuu8Mg',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oVm7KpsHwQ9ndiyw' => 
=======
    'generated::4CUqgarsmp0qxddR' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cart/userAddress',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CartController@userAddress',
        'controller' => 'App\\Http\\Controllers\\api\\CartController@userAddress',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::oVm7KpsHwQ9ndiyw',
=======
        'as' => 'generated::4CUqgarsmp0qxddR',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dVpx2ep1XeqyukIw' => 
=======
    'generated::9OPiSjOgYlYGlFcW' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/profileViewApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@profileViewApi',
        'controller' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@profileViewApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::dVpx2ep1XeqyukIw',
=======
        'as' => 'generated::9OPiSjOgYlYGlFcW',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZqulX27yaz2cF83I' => 
=======
    'generated::x6IpkY5ZyRdzdJKm' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addPermanentProfileApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@addPermanentProfileApi',
        'controller' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@addPermanentProfileApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZqulX27yaz2cF83I',
=======
        'as' => 'generated::x6IpkY5ZyRdzdJKm',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::bCcT4zn7VRQ3JZPP' => 
=======
    'generated::bQZ22gxt1UbSVM9i' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/changePasswordApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@changePasswordApi',
        'controller' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@changePasswordApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::bCcT4zn7VRQ3JZPP',
=======
        'as' => 'generated::bQZ22gxt1UbSVM9i',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eHcqFbulpEGmbvr7' => 
=======
    'generated::SHGw8FdaO4aHnj5w' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/saveTempAddressApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@saveTempAddressApi',
        'controller' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@saveTempAddressApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::eHcqFbulpEGmbvr7',
=======
        'as' => 'generated::SHGw8FdaO4aHnj5w',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5csBAWEI9Xw4n7lS' => 
=======
    'generated::QtXtNJGMoXPEbkps' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/showTempAddressApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@showTempAddressApi',
        'controller' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@showTempAddressApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::5csBAWEI9Xw4n7lS',
=======
        'as' => 'generated::QtXtNJGMoXPEbkps',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ulgxNfpPNDRbPuEh' => 
=======
    'generated::9tWKvLEg5tIpR3u4' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tempAddressDelete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@tempAddressDelete',
        'controller' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@tempAddressDelete',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ulgxNfpPNDRbPuEh',
=======
        'as' => 'generated::9tWKvLEg5tIpR3u4',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DdX244ZJkqqktaOw' => 
=======
    'generated::fbVNYTUWr7x7rXvy' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/profileViewByIdApi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@profileViewByIdApi',
        'controller' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@profileViewByIdApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::DdX244ZJkqqktaOw',
=======
        'as' => 'generated::fbVNYTUWr7x7rXvy',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ElzXcuJFSihr91Hu' => 
=======
    'generated::KEYXqinvpDMAN2Ut' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/logoutApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\loginController@logoutApi',
        'controller' => 'App\\Http\\Controllers\\api\\loginController@logoutApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ElzXcuJFSihr91Hu',
=======
        'as' => 'generated::KEYXqinvpDMAN2Ut',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8wGi3o3xzU0uutvy' => 
=======
    'generated::dJA6yPvcTqjLXhOb' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\PaymentController@index',
        'controller' => 'App\\Http\\Controllers\\api\\PaymentController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::8wGi3o3xzU0uutvy',
=======
        'as' => 'generated::dJA6yPvcTqjLXhOb',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::p7bCZfuasEKayqT9' => 
=======
    'generated::IDGMSnCRvQPP6zBY' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/cart/addOrder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\WareHouseController@addOrder',
        'controller' => 'App\\Http\\Controllers\\api\\WareHouseController@addOrder',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::p7bCZfuasEKayqT9',
=======
        'as' => 'generated::IDGMSnCRvQPP6zBY',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::NkWAyuxqghJpalCw' => 
=======
    'generated::MrBijlmGa9vVE4d3' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/checkout/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\PaymentController@payment',
        'controller' => 'App\\Http\\Controllers\\api\\PaymentController@payment',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::NkWAyuxqghJpalCw',
=======
        'as' => 'generated::MrBijlmGa9vVE4d3',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wqEaCPxfWlww61GU' => 
=======
    'generated::9quys91v7ASZT8be' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/productList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\tryController@productListing',
        'controller' => 'App\\Http\\Controllers\\api\\tryController@productListing',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wqEaCPxfWlww61GU',
=======
        'as' => 'generated::9quys91v7ASZT8be',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DLINgTeW7Rk20MwT' => 
=======
    'generated::3bxlqUUSW1NckhFt' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wareHouseProductList/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::DLINgTeW7Rk20MwT',
=======
        'as' => 'generated::3bxlqUUSW1NckhFt',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => '/admin_theme/pages/wareHouse/productsList',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::u7l5VUV0eJKh78yK' => 
=======
    'generated::iMVpirbxX5YjBaMR' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin_dashboard/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\dashboardController@admin_Dashboard',
        'controller' => 'App\\Http\\Controllers\\api\\dashboardController@admin_Dashboard',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::u7l5VUV0eJKh78yK',
=======
        'as' => 'generated::iMVpirbxX5YjBaMR',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BV5jVm5LOZQMpemN' => 
=======
    'generated::QN3Dw7mqNhYJFSCY' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/offerListing/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::BV5jVm5LOZQMpemN',
=======
        'as' => 'generated::QN3Dw7mqNhYJFSCY',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/offers/offerList',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4BE0KFqgzPzyyUEX' => 
=======
    'generated::rQeFNlboTowg2Y8f' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addOffer/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\OfferController@addOffer',
        'controller' => 'App\\Http\\Controllers\\api\\OfferController@addOffer',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::4BE0KFqgzPzyyUEX',
=======
        'as' => 'generated::rQeFNlboTowg2Y8f',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cG3CBeAytZb5OXYf' => 
=======
    'generated::4guPwj9wGUiojz6B' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/editOffer/{id}{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\OfferController@editOffer',
        'controller' => 'App\\Http\\Controllers\\api\\OfferController@editOffer',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::cG3CBeAytZb5OXYf',
=======
        'as' => 'generated::4guPwj9wGUiojz6B',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9Ece0CxZidbVYJbd' => 
=======
    'generated::F77BBP5B60sc0XDB' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/OffersPdfdownload/{offerId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\OfferController@downloadPdf',
        'controller' => 'App\\Http\\Controllers\\api\\OfferController@downloadPdf',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::9Ece0CxZidbVYJbd',
=======
        'as' => 'generated::F77BBP5B60sc0XDB',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::B0euo0QnUhmTdO2R' => 
=======
    'generated::yAkPeqiqNW5ekNW3' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/sendOfferMailsToB2C',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\OfferController@sendOfferMailsToB2C',
        'controller' => 'App\\Http\\Controllers\\api\\OfferController@sendOfferMailsToB2C',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::B0euo0QnUhmTdO2R',
=======
        'as' => 'generated::yAkPeqiqNW5ekNW3',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LLcMr8FqPtBmjM2s' => 
=======
    'generated::peVwI1GRu728eNZv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/viewOffersForB2C',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\OfferController@viewOffersForB2C',
        'controller' => 'App\\Http\\Controllers\\api\\OfferController@viewOffersForB2C',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::peVwI1GRu728eNZv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yGqaxLTnMfCTxomF' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoriesListingApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\categoriesController@categoriesListing',
        'controller' => 'App\\Http\\Controllers\\api\\categoriesController@categoriesListing',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::LLcMr8FqPtBmjM2s',
=======
        'as' => 'generated::yGqaxLTnMfCTxomF',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::V0qVYLCZGHve8ARr' => 
=======
    'generated::sZ83A0EV4YmcVnyE' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoriesListing/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::V0qVYLCZGHve8ARr',
=======
        'as' => 'generated::sZ83A0EV4YmcVnyE',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/categories/categoriesList',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::y1TFAMXJy3bKZJ8z' => 
=======
    'generated::Wb3GJNUBdcb0m0GY' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addCategories/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\categoriesController@addCategories',
        'controller' => 'App\\Http\\Controllers\\api\\categoriesController@addCategories',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::y1TFAMXJy3bKZJ8z',
=======
        'as' => 'generated::Wb3GJNUBdcb0m0GY',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::nBbJMWBVC9AIp0Cs' => 
=======
    'generated::GHEahDAo5VLLxuO4' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addCategoriesApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\categoriesController@addCategoriesApi',
        'controller' => 'App\\Http\\Controllers\\api\\categoriesController@addCategoriesApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::nBbJMWBVC9AIp0Cs',
=======
        'as' => 'generated::GHEahDAo5VLLxuO4',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::mPYJPzNigQi5Y3rk' => 
=======
    'generated::sazenWwzGm8cPHOw' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/editProduct/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ProductController@editProduct',
        'controller' => 'App\\Http\\Controllers\\api\\ProductController@editProduct',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::mPYJPzNigQi5Y3rk',
=======
        'as' => 'generated::sazenWwzGm8cPHOw',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::q5PE2Uv1rRk1Zjdo' => 
=======
    'generated::itS6NNA0BMCr9r80' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/deleteCategory/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\categoriesController@deleteCategory',
        'controller' => 'App\\Http\\Controllers\\api\\categoriesController@deleteCategory',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::q5PE2Uv1rRk1Zjdo',
=======
        'as' => 'generated::itS6NNA0BMCr9r80',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Ea9KAuZtAFdg4nmg' => 
=======
    'generated::lvZonarlcYeT0OBV' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/productListingApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ProductController@productListing',
        'controller' => 'App\\Http\\Controllers\\api\\ProductController@productListing',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Ea9KAuZtAFdg4nmg',
=======
        'as' => 'generated::lvZonarlcYeT0OBV',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::J747nSE35LItRHtQ' => 
=======
    'generated::Xierdv4DOwLkfQ0t' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/productListing/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::J747nSE35LItRHtQ',
=======
        'as' => 'generated::Xierdv4DOwLkfQ0t',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/products/productsList',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tL5HL87POHtvJo3i' => 
=======
    'generated::uLYqxJWQo2rq7Vr7' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addProduct/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ProductController@addProduct',
        'controller' => 'App\\Http\\Controllers\\api\\ProductController@addProduct',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::tL5HL87POHtvJo3i',
=======
        'as' => 'generated::uLYqxJWQo2rq7Vr7',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wqThUYd8iCznBffn' => 
=======
    'generated::dnAcXrnh3D0XupvK' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addProduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ProductController@addproductList',
        'controller' => 'App\\Http\\Controllers\\api\\ProductController@addproductList',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wqThUYd8iCznBffn',
=======
        'as' => 'generated::dnAcXrnh3D0XupvK',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RtM4jlcd20eDzpCT' => 
=======
    'generated::7jNqMe4PBOR1XLRY' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/productImportApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ProductController@productImport',
        'controller' => 'App\\Http\\Controllers\\api\\ProductController@productImport',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::RtM4jlcd20eDzpCT',
=======
        'as' => 'generated::7jNqMe4PBOR1XLRY',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oxwoCToiVmcX6XQW' => 
=======
    'generated::RmsXZZtrJT7pYB2h' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/productExport',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ProductController@productExport',
        'controller' => 'App\\Http\\Controllers\\api\\ProductController@productExport',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::oxwoCToiVmcX6XQW',
=======
        'as' => 'generated::RmsXZZtrJT7pYB2h',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GCcr7o66X69tfZB1' => 
=======
    'generated::JDOnKDE4kWUyRAH0' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getProductCategoryAPI',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ProductController@getProductCategory',
        'controller' => 'App\\Http\\Controllers\\api\\ProductController@getProductCategory',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::GCcr7o66X69tfZB1',
=======
        'as' => 'generated::JDOnKDE4kWUyRAH0',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FksDROmsm0TMdHFf' => 
=======
    'generated::BoGsqJU4JVgmcpP1' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quatationListingApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\quatationController@quatationListingApi',
        'controller' => 'App\\Http\\Controllers\\api\\quatationController@quatationListingApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::FksDROmsm0TMdHFf',
=======
        'as' => 'generated::BoGsqJU4JVgmcpP1',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::AgTaUDnTlsOlY1cs' => 
=======
    'generated::Pg3vt7oFrQ9l1COm' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/quatationListing/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\quatationController@quatationList',
        'controller' => 'App\\Http\\Controllers\\api\\quatationController@quatationList',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::AgTaUDnTlsOlY1cs',
=======
        'as' => 'generated::Pg3vt7oFrQ9l1COm',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::h4DQNozcVPVStEcc' => 
=======
    'generated::YhiEMWfyalqwSynV' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/assignmentListingApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\AssignmentController@AssignmentListing',
        'controller' => 'App\\Http\\Controllers\\api\\AssignmentController@AssignmentListing',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::h4DQNozcVPVStEcc',
=======
        'as' => 'generated::YhiEMWfyalqwSynV',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::WdWz3Bc68qeZKahe' => 
=======
    'generated::hj5O0C2lablYuOgd' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/assignmentListing/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::WdWz3Bc68qeZKahe',
=======
        'as' => 'generated::hj5O0C2lablYuOgd',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/assignments/assignmentList',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FYrUEjvdGaxxdLhM' => 
=======
    'generated::Pq8BrOECI6LECY74' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addAssignment/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\AssignmentController@addAssignment',
        'controller' => 'App\\Http\\Controllers\\api\\AssignmentController@addAssignment',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::FYrUEjvdGaxxdLhM',
=======
        'as' => 'generated::Pq8BrOECI6LECY74',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::X8X4BfuIQ0BDlINh' => 
=======
    'generated::wZ74bri4BJjLtmvs' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addAssignmentsApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\AssignmentController@addAssignmentsApi',
        'controller' => 'App\\Http\\Controllers\\api\\AssignmentController@addAssignmentsApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::X8X4BfuIQ0BDlINh',
=======
        'as' => 'generated::wZ74bri4BJjLtmvs',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::bHizXRYtUz9HyNBs' => 
=======
    'generated::A234fAggIc0N627r' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/editAssignment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\AssignmentController@editAssignment',
        'controller' => 'App\\Http\\Controllers\\api\\AssignmentController@editAssignment',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::bHizXRYtUz9HyNBs',
=======
        'as' => 'generated::A234fAggIc0N627r',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PRYtPAEid4Y3DcT4' => 
=======
    'generated::a0EaMdt0CxW7zLBu' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/deliveryNotesListingApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\DeliveryNotesController@DeliveryNotesListingApi',
        'controller' => 'App\\Http\\Controllers\\api\\DeliveryNotesController@DeliveryNotesListingApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::PRYtPAEid4Y3DcT4',
=======
        'as' => 'generated::a0EaMdt0CxW7zLBu',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xD78yGZTohJMqG2J' => 
=======
    'generated::prEDF6bviqftgbmL' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/deliveryNotesListing/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xD78yGZTohJMqG2J',
=======
        'as' => 'generated::prEDF6bviqftgbmL',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/delivery_notes/DeliveryNotesList',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cOWy5JI0kz4yU4HP' => 
=======
    'generated::fwv2IpT9Yzq0Ghox' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addDeliveryNotes/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\DeliveryNotesController@addDeliveryNotes',
        'controller' => 'App\\Http\\Controllers\\api\\DeliveryNotesController@addDeliveryNotes',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::cOWy5JI0kz4yU4HP',
=======
        'as' => 'generated::fwv2IpT9Yzq0Ghox',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::rIzS6sYiqYYZoydO' => 
=======
    'generated::uInknvfz3044D0aK' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addDeliveryNotesApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\DeliveryNotesController@addDeliveryNotesApi',
        'controller' => 'App\\Http\\Controllers\\api\\DeliveryNotesController@addDeliveryNotesApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::rIzS6sYiqYYZoydO',
=======
        'as' => 'generated::uInknvfz3044D0aK',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::aDvyGTsQ5e94XBTN' => 
=======
    'generated::h50PFgrsnmaF45VA' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/editDeliveryNotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\DeliveryNotesController@editDeliveryNotes',
        'controller' => 'App\\Http\\Controllers\\api\\DeliveryNotesController@editDeliveryNotes',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::aDvyGTsQ5e94XBTN',
=======
        'as' => 'generated::h50PFgrsnmaF45VA',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9hoNJ58D96xhsKOz' => 
=======
    'generated::O7MXywLYJQzx8tSf' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/billsListingApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\billsController@billsListingApi',
        'controller' => 'App\\Http\\Controllers\\api\\billsController@billsListingApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::9hoNJ58D96xhsKOz',
=======
        'as' => 'generated::O7MXywLYJQzx8tSf',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eNijKfm7lgL9zDxc' => 
=======
    'generated::7WNq8Ol4bhPSUIOa' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/billsListing/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::eNijKfm7lgL9zDxc',
=======
        'as' => 'generated::7WNq8Ol4bhPSUIOa',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/bills/billsList',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ON3V7Ex8EJhpCmHF' => 
=======
    'generated::oG5O2y0xYsxhlCfm' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addbills/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\billsController@addbills',
        'controller' => 'App\\Http\\Controllers\\api\\billsController@addbills',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ON3V7Ex8EJhpCmHF',
=======
        'as' => 'generated::oG5O2y0xYsxhlCfm',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::SGl4ZRMmk77DFib1' => 
=======
    'generated::JyxREW4jx5bdnUhE' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addbillsApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\billsController@addbillsApi',
        'controller' => 'App\\Http\\Controllers\\api\\billsController@addbillsApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::SGl4ZRMmk77DFib1',
=======
        'as' => 'generated::JyxREW4jx5bdnUhE',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::qlEokGRnOfboSrQu' => 
=======
    'generated::EnOdo8hYvWssiPXq' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/editbills',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\billsController@editbills',
        'controller' => 'App\\Http\\Controllers\\api\\billsController@editbills',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::qlEokGRnOfboSrQu',
=======
        'as' => 'generated::EnOdo8hYvWssiPXq',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CfO3IynMczDt852m' => 
=======
    'generated::M0mSDULOvSNH85Ky' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/creditsListingApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\creditsController@creditListingApi',
        'controller' => 'App\\Http\\Controllers\\api\\creditsController@creditListingApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::CfO3IynMczDt852m',
=======
        'as' => 'generated::M0mSDULOvSNH85Ky',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::26su3akzBK6hm6wF' => 
=======
    'generated::NWqPBg3EOpR9WOnV' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/creditsListing/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::26su3akzBK6hm6wF',
=======
        'as' => 'generated::NWqPBg3EOpR9WOnV',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/credits/creditList',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pLrPXiWCYUe4Yy5B' => 
=======
    'generated::fUCk6wdJigXE9sjW' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addCredits/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\creditsController@addCredits',
        'controller' => 'App\\Http\\Controllers\\api\\creditsController@addCredits',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::pLrPXiWCYUe4Yy5B',
=======
        'as' => 'generated::fUCk6wdJigXE9sjW',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xIHqpu1Tp0kdNJga' => 
=======
    'generated::mmokm91Vtibnzp6x' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addCreditsApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\creditsController@addCreditsApi',
        'controller' => 'App\\Http\\Controllers\\api\\creditsController@addCreditsApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xIHqpu1Tp0kdNJga',
=======
        'as' => 'generated::mmokm91Vtibnzp6x',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::bOwk8Loy8q1Jo6ks' => 
=======
    'generated::GVb1WVgPeTfWajma' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/editCredits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\creditsController@editCredits',
        'controller' => 'App\\Http\\Controllers\\api\\creditsController@editCredits',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::bOwk8Loy8q1Jo6ks',
=======
        'as' => 'generated::GVb1WVgPeTfWajma',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wuPlt8qEM5HlDltm' => 
=======
    'generated::bNi0P8gBvJjPqYya' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/claimsListing/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wuPlt8qEM5HlDltm',
=======
        'as' => 'generated::bNi0P8gBvJjPqYya',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/claim_manager/claimsList',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZkRKAsVU8tMaQYaR' => 
=======
    'generated::ut4CXb8q51eyoTga' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addClaims/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\claims_manager_Controller@addCliams',
        'controller' => 'App\\Http\\Controllers\\api\\claims_manager_Controller@addCliams',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZkRKAsVU8tMaQYaR',
=======
        'as' => 'generated::ut4CXb8q51eyoTga',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GGnIJCfmgFgXvmLW' => 
=======
    'generated::52qfDTksyKsLd9mm' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/editClaims',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\claims_manager_Controller@editCliams',
        'controller' => 'App\\Http\\Controllers\\api\\claims_manager_Controller@editCliams',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::GGnIJCfmgFgXvmLW',
=======
        'as' => 'generated::52qfDTksyKsLd9mm',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IbOZAGvMnOIg8752' => 
=======
    'generated::Nx9EpQ8m5CCIKx4a' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/contactListing/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IbOZAGvMnOIg8752',
=======
        'as' => 'generated::Nx9EpQ8m5CCIKx4a',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/contacts/ContactsList',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HF9fUuDt6edRC8tX' => 
=======
    'generated::rWelbACGwtqQsFeT' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addcontact/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ContactController@addContacts',
        'controller' => 'App\\Http\\Controllers\\api\\ContactController@addContacts',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::HF9fUuDt6edRC8tX',
=======
        'as' => 'generated::rWelbACGwtqQsFeT',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5DB1Qvx5wIg2AwOQ' => 
=======
    'generated::mVA7duRBb4UVBFeT' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/SuppliersListing/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::5DB1Qvx5wIg2AwOQ',
=======
        'as' => 'generated::mVA7duRBb4UVBFeT',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/suppliers/SuppliersList',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9DHv3ZWerKceP4kx' => 
=======
    'generated::aeg5TpSxI682dpdT' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addSuppliers/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\SuppliersController@addSuppliers',
        'controller' => 'App\\Http\\Controllers\\api\\SuppliersController@addSuppliers',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::9DHv3ZWerKceP4kx',
=======
        'as' => 'generated::aeg5TpSxI682dpdT',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::1jDsLU57Gnh29eiN' => 
=======
    'generated::UkQCPoxNBmcG3nEU' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/customerListingApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerMngController@customerListingApi',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerMngController@customerListingApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::1jDsLU57Gnh29eiN',
=======
        'as' => 'generated::UkQCPoxNBmcG3nEU',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DvhRgR2MUf4vzJf0' => 
=======
    'generated::cZNSierL7qa2fP1Z' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/customerListing/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::DvhRgR2MUf4vzJf0',
=======
        'as' => 'generated::cZNSierL7qa2fP1Z',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/customer/customerList',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::B9KuLjnkzC69G19D' => 
=======
    'generated::wT1CMzva6VDoouL8' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/editcustomer/{role}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerMngController@editCustomer',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerMngController@editCustomer',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::B9KuLjnkzC69G19D',
=======
        'as' => 'generated::wT1CMzva6VDoouL8',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::gakLfRvT7x6VZj8W' => 
=======
    'generated::tGdbwCZrZIks0KYd' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/updatecustomer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerMngController@updateCustomer',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerMngController@updateCustomer',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::gakLfRvT7x6VZj8W',
=======
        'as' => 'generated::tGdbwCZrZIks0KYd',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dEUWgi6pl4LLNoLN' => 
=======
    'generated::nCzbByxmA1845cmQ' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/deletecustomer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CustomerMngController@deleteCustomer',
        'controller' => 'App\\Http\\Controllers\\api\\CustomerMngController@deleteCustomer',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::dEUWgi6pl4LLNoLN',
=======
        'as' => 'generated::nCzbByxmA1845cmQ',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dxDKOsz8XhTa0gMX' => 
=======
    'generated::ed43iVYkhesTvpII' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orderListingApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\OrderMngController@orderListingApi',
        'controller' => 'App\\Http\\Controllers\\api\\OrderMngController@orderListingApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::dxDKOsz8XhTa0gMX',
=======
        'as' => 'generated::ed43iVYkhesTvpII',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::znRJRIrbO9KULccC' => 
=======
    'generated::qHC8IlzBaVJFFQTa' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getOrdersDetailsApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\OrderMngController@getOrdersDetailsApi',
        'controller' => 'App\\Http\\Controllers\\api\\OrderMngController@getOrdersDetailsApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::znRJRIrbO9KULccC',
=======
        'as' => 'generated::qHC8IlzBaVJFFQTa',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::KQryixx4RCLdBVc9' => 
=======
    'generated::JgLb5T7bSgQrba7k' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orderListing/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::KQryixx4RCLdBVc9',
=======
        'as' => 'generated::JgLb5T7bSgQrba7k',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/order/orderList',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::yi9SMSeWoLWGyhJy' => 
=======
    'generated::QUDzvTvw7pnrBbQJ' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/editorder/{role}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\OrderMngController@editOrder',
        'controller' => 'App\\Http\\Controllers\\api\\OrderMngController@editOrder',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::yi9SMSeWoLWGyhJy',
=======
        'as' => 'generated::QUDzvTvw7pnrBbQJ',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DWIu6Nd2A5IyZO6T' => 
=======
    'generated::Rq9xKK5lhCF6DZNm' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/updateOrderFinalStatusApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\OrderMngController@updateOrderFinalStatusApi',
        'controller' => 'App\\Http\\Controllers\\api\\OrderMngController@updateOrderFinalStatusApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::DWIu6Nd2A5IyZO6T',
=======
        'as' => 'generated::Rq9xKK5lhCF6DZNm',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::aMHXHUqXqvCNcTgB' => 
=======
    'generated::G8Mwuz42nMxP8ktH' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/couponListingApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CouponMngController@couponListingApi',
        'controller' => 'App\\Http\\Controllers\\api\\CouponMngController@couponListingApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::aMHXHUqXqvCNcTgB',
=======
        'as' => 'generated::G8Mwuz42nMxP8ktH',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4B4xEZXvDqLFhSEk' => 
=======
    'generated::SWxi5Oxbrav38x1r' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/couponListing/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::4B4xEZXvDqLFhSEk',
=======
        'as' => 'generated::SWxi5Oxbrav38x1r',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/coupon/couponList',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HfVNaFoKB5OchgUX' => 
=======
    'generated::ZTsMS3UhfuiXkXiK' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/addcoupon/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CouponMngController@addCoupon',
        'controller' => 'App\\Http\\Controllers\\api\\CouponMngController@addCoupon',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::HfVNaFoKB5OchgUX',
=======
        'as' => 'generated::ZTsMS3UhfuiXkXiK',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::UUlpnrI6cij9w2EH' => 
=======
    'generated::P1K1Lwh2ecgK7Zum' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/addcouponApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CouponMngController@addCouponApi',
        'controller' => 'App\\Http\\Controllers\\api\\CouponMngController@addCouponApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::UUlpnrI6cij9w2EH',
=======
        'as' => 'generated::P1K1Lwh2ecgK7Zum',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Y512MUxWTFKwAGx7' => 
=======
    'generated::sthbhOqMDQTbOJ2f' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/updateCouponStatusApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CouponMngController@updateCoupon',
        'controller' => 'App\\Http\\Controllers\\api\\CouponMngController@updateCoupon',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Y512MUxWTFKwAGx7',
=======
        'as' => 'generated::sthbhOqMDQTbOJ2f',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5LwxQo6LLqyBZALt' => 
=======
    'generated::wUfkz6MXvP1duvfw' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/Statistics/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::5LwxQo6LLqyBZALt',
=======
        'as' => 'generated::wUfkz6MXvP1duvfw',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/Statistics/Statistics',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::94KooSPxSQNqZcdE' => 
=======
    'generated::3MEN9EaBcL6fxF9a' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/connection/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::94KooSPxSQNqZcdE',
=======
        'as' => 'generated::3MEN9EaBcL6fxF9a',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/connections/connections',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TB6iVglcN61U7Wlc' => 
=======
    'generated::ZqvefFhxpDy5yDwu' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/newsLetter/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::TB6iVglcN61U7Wlc',
=======
        'as' => 'generated::ZqvefFhxpDy5yDwu',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/newsLetter/NewsLetter',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RaHiHoTo60uzhX29' => 
=======
    'generated::VBXm2XGPz2NgUAcW' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/settings/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::RaHiHoTo60uzhX29',
=======
        'as' => 'generated::VBXm2XGPz2NgUAcW',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/settings/settings',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::mncaNsTQqUvSLn9n' => 
=======
    'generated::Wf2cozMbwhPFRfea' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/customerAddressbook{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::mncaNsTQqUvSLn9n',
=======
        'as' => 'generated::Wf2cozMbwhPFRfea',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin_theme/pages/customerAddressbook/customerAddressbook',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CG8kviUbZjkafsEk' => 
=======
    'generated::D7RVso97QLKZbHUm' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/accountSetting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@accountSetting',
        'controller' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@accountSetting',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::CG8kviUbZjkafsEk',
=======
        'as' => 'generated::D7RVso97QLKZbHUm',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8oAlGWZe28wAABta' => 
=======
    'generated::gZ8x8zpkvroJQB6m' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ProductdetailPage/{product_id}/{product_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@ProductdetailPage',
        'controller' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@ProductdetailPage',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::8oAlGWZe28wAABta',
=======
        'as' => 'generated::gZ8x8zpkvroJQB6m',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::VWT98YpsVPjW7rzf' => 
=======
    'generated::c9UObP0HLOAK5jsq' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/cart/getCountOfThisProductApi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@getCountOfThisProductApi',
        'controller' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@getCountOfThisProductApi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::VWT98YpsVPjW7rzf',
=======
        'as' => 'generated::c9UObP0HLOAK5jsq',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xYYNQwJyXt2D1Vut' => 
=======
    'generated::vPab7AbrZeKYTLcs' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ProductsByCategories/{Kategorie_Name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@ProductsByCategories',
        'controller' => 'App\\Http\\Controllers\\api\\frontEnd\\webController@ProductsByCategories',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xYYNQwJyXt2D1Vut',
=======
        'as' => 'generated::vPab7AbrZeKYTLcs',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::x94VA4nsfKNFtMYH' => 
=======
    'generated::JXSSHqeFfFuG4WTD' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/productPortfolio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::x94VA4nsfKNFtMYH',
=======
        'as' => 'generated::JXSSHqeFfFuG4WTD',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'frontEnd/pages/productPortfolio',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::mt8PaHHo01ovBHz9' => 
=======
    'generated::CxhBi5NsVND5ePOi' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/cartProducts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CartController@cartProductList',
        'controller' => 'App\\Http\\Controllers\\api\\CartController@cartProductList',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::mt8PaHHo01ovBHz9',
=======
        'as' => 'generated::CxhBi5NsVND5ePOi',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GtbuZsu5BLmXzu8m' => 
=======
    'generated::LyxMlFdWbqKJ5oaI' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/updateCartProducts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CartController@UpdateCartProductList',
        'controller' => 'App\\Http\\Controllers\\api\\CartController@UpdateCartProductList',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::GtbuZsu5BLmXzu8m',
=======
        'as' => 'generated::LyxMlFdWbqKJ5oaI',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Yx6yn7zpZO5E8idY' => 
=======
    'generated::lpsjIMdn59IxJw31' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/deleteCartProducts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CartController@deleteCartProductList',
        'controller' => 'App\\Http\\Controllers\\api\\CartController@deleteCartProductList',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Yx6yn7zpZO5E8idY',
=======
        'as' => 'generated::lpsjIMdn59IxJw31',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BtTKPV29NnkzkOBu' => 
=======
    'generated::0Rx19Nd0jv6npLWH' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/checkOut/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CartController@checkOutCartProduct',
        'controller' => 'App\\Http\\Controllers\\api\\CartController@checkOutCartProduct',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::BtTKPV29NnkzkOBu',
=======
        'as' => 'generated::0Rx19Nd0jv6npLWH',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::6kn9zpgBDe7giA0j' => 
=======
    'generated::YpqpawyD2KGOnh64' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/productListingNew',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\tryController@productListing',
        'controller' => 'App\\Http\\Controllers\\api\\tryController@productListing',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::6kn9zpgBDe7giA0j',
=======
        'as' => 'generated::YpqpawyD2KGOnh64',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::guAz94nTd43yL55A' => 
=======
    'generated::RZLMfPLMOjwGdmxl' => 
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:264:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:46:"function () {
    return \\view(\'welcome\');
<<<<<<< HEAD
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006c40000000000000000";}";s:4:"hash";s:44:"BVM2ABNgSOKtHaekaNhNw8VwVaRwe0wPAPvRWY7D180=";}}',
=======
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000005b382105000000007a54886c";}";s:4:"hash";s:44:"KWYhXbORcW5/mpXS7+PZuLxtymV9rq5ooRV5s1j4Q34=";}}',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::guAz94nTd43yL55A',
=======
        'as' => 'generated::RZLMfPLMOjwGdmxl',
>>>>>>> 18f07d3cdfc2f59b715c9bf245ee8449eff3157f
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
