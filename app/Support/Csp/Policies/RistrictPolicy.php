<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace App\Support\Csp\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Keyword;
use Spatie\Csp\Policies\Basic;

class RistrictPolicy extends Basic {

    const NONE = 'none';

    public function configure() {
        parent::configure();

        // We can add our own policy directives here...
        $this
                ->addDirective(Directive::OBJECT, [
                    Keyword::NONE,
                ])
                ->addDirective(Directive::BASE, [
                    Keyword::NONE,
                ])
//                ->addDirective(Directive::FONT, [
//                    'fonts.gstatics.com',
//                ])
//                ->addDirective(Directive::SCRIPT, [
//                    Keyword::SELF,
//                ])
                ->addDirective(Directive::SCRIPT, [
//                    Keyword::UNSAFE_INLINE,
                    Keyword::UNSAFE_EVAL,
                ])
//                ->addDirective(Directive::SCRIPT, [
//                    Keyword::NONE,
//                ])
                
                ->addDirective(Directive::STYLE, [
                        Keyword::SELF,Keyword::UNSAFE_HASHES,
                ])
                ->addNonceForDirective(Directive::SCRIPT, [
                    Keyword::UNSAFE_HASHES,
                    Keyword::UNSAFE_EVAL,
                    Keyword::UNSAFE_INLINE,
                    Keyword::STRICT_DYNAMIC,
                    'https:',
                    'http:'
//                    'cdnjs.cloudflare.com',
                ])
//                ->addNonceForDirective(Directive::SCRIPT, [
//                    Keyword::UNSAFE_HASHES,
//                    'code.jquery.com',
//                ])
//                ->addDirective(Directive::SCRIPT, [
//                    Keyword::UNSAFE_HASHES,
//                    '*.github.io/buttons.js',
//                ])
//                ->addNonceForDirective(Directive::SCRIPT, [
//                    Keyword::UNSAFE_INLINE,
//                    'cdn.jsdelivr.net',
//                ])
//                ->addNonceForDirective(Directive::SCRIPT, [
//                    Keyword::SELF,
//                    'assets/js/soft-ui-dashboard.js',
//                ])
                ->addNonceForDirective(Directive::FONT, [
                    Keyword::UNSAFE_HASHES,
                    Keyword::UNSAFE_EVAL,
                    Keyword::UNSAFE_INLINE,
//                    Keyword::SELF,
//                    'assets/front/css/bootstrap.min.css',
                ])
                ->addDirective(Directive::FONT, [
                    'cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/webfonts/',
                    'fonts.gstatic.com/s/heebo/v21/',
                    'fonts.gstatic.com/s/nunito/',
                    'cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/fonts/',
                    'fonts.googleapis.com/',
                ])
                ->addDirective(Directive::SCRIPT, [
                    'cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js',
                    
                ])
                ->addNonceForDirective(Directive::SCRIPT, [
                    'google.com/recaptcha/api.js',
                    
                ])
//                ->addNonceForDirective(Directive::STYLE, [
//                    Keyword::SELF,
//                ])
                ->addDirective(Directive::STYLE, [
                    'cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/',
                    'cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/'
                ])
                ->addDirective(Directive::IMG, [
                    'self',
                    'data'])
        ;
    }

}
