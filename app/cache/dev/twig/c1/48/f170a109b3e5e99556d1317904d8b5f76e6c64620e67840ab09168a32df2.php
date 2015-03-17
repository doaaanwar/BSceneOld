<?php

/* base.html.twig */
class __TwigTemplate_c148f170a109b3e5e99556d1317904d8b5f76e6c64620e67840ab09168a32df2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "B-Scene";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "\t
            <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmebscene/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- Custom CSS -->
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmebscene/css/bscene.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "            <!-- Navigation -->
            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\"> B-Scene</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"#\">About</a>
                            </li>
                            <li>
                                <a href=\"#\">Services</a>
                            </li>
                            <li>
                                <a href=\"#\">Contact</a>
                            </li>
                        </ul>
                        <form class=\"navbar-form navbar-left\" role=\"search\">
                            <div class=\"form-group\">
                                <input class=\"form-control\" type=\"text\" />
                            </div> 
                            <button type=\"button\" class=\"btn btn-default\" onclick=\"'#'\">Search</button>
                        </form>
                        <ul class=\"nav navbar-nav navbar-right\">

                            <li>
                                <a class=\"login-window\" href=\"#login-box\">Login</a>
                            </li>
                            <li>
                                <a href=\"#\">Sign up</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.container -->
            </nav>


            ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "                <a href=\"#\" class=\"close\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmebscene/images/close_pop.png"), "html", null, true);
        echo "\" class=\"btn_close\" title=\"Close Window\" alt=\"Close\" /></a>
                <form  class=\"signin\" >
                    <fieldset class=\"textbox\">
                        <label class=\"username\">
                            <span>Username or email</span>
                            <input id=\"username\" name=\"username\" value=\"\" type=\"text\" autocomplete=\"on\" placeholder=\"Username\">
                        </label>
                        <label class=\"password\">
                            <span>Password</span>
                            <input id=\"password\" name=\"password\" value=\"\" type=\"password\" placeholder=\"Password\">
                        </label>
                        <button class=\"button\" type=\"button\" onclick=\"location.href = 'indexAfterLogin.html'\">Sign in</button>
                        <p>
                            <a class=\"forgot\" href=\"forgetPassword.html\">Forgot your password?</a>
                        </p>        
                    </fieldset>
                </form>
            </div>

        ";
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        // line 65
        echo "                <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmebscene/js/jquery.js"), "html", null, true);
        echo "\"></script>
                <!-- Bootstrap Core JavaScript -->
                <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmebscene/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

                <div id=\"login-box\" class=\"login-popup\">
                    <script type=\"text/javascript\">
                                \$(document).ready(function () {
                                    \$('a.login-window').click(function () {

                                        //Getting the variable's value from a link 
                                        var loginBox = \$(this).attr('href');

                                        //Fade in the Popup
                                        \$(loginBox).fadeIn(300);

                                        //Set the center alignment padding + border see css style
                                        var popMargTop = (\$(loginBox).height() + 24) / 2;
                                        var popMargLeft = (\$(loginBox).width() + 24) / 2;

                                        \$(loginBox).css({
                                            'margin-top': -popMargTop,
                                            'margin-left': -popMargLeft
                                        });

                                        // Add the mask to body
                                        \$('body').append('<div id=\"mask\"></div>');
                                        \$('#mask').fadeIn(300);

                                        return false;
                                    });

                                    // When clicking on the button close or the mask layer the popup closed
                                    \$('a.close, #mask').on('click', function () {
                                        \$('#mask , .login-popup').fadeOut(300, function () {
                                            \$('#mask').remove();
                                        });
                                        return false;
                                    });
                                });
                    </script>
                ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 67,  156 => 65,  153 => 64,  128 => 106,  126 => 64,  75 => 15,  72 => 14,  66 => 9,  61 => 7,  56 => 6,  50 => 5,  44 => 126,  42 => 14,  35 => 11,  33 => 6,  29 => 5,  23 => 1,);
    }
}
