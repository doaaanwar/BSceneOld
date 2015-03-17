<?php

/* base.html.twig */
class __TwigTemplate_35b2f3ba70f14867c423cbcbad48fbfb1f1847c3a5953d407fb7392e8aa0ce68 extends Twig_Template
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
        // line 119
        echo "
        ";
        // line 120
        $this->displayBlock('javascripts', $context, $blocks);
        // line 125
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
            <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
            <!-- Custom CSS -->
            <link href=\"css/bscene.css\" rel=\"stylesheet\">
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
                        <a class=\"navbar-brand\" href=\"index.html\"> B-Scene</a>
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
                            </div> <button type=\"button\" class=\"btn btn-default\" onclick=\"#\">Search</button>
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

            <!--Login box -->
            <div id=\"login-box\" class=\"login-popup\">
                <script>
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
                <a href=\"#\" class=\"close\"><img src=\"images/close_pop.png\" class=\"btn_close\" title=\"Close Window\" alt=\"Close\" /></a>
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

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        // line 121
        echo "            <script src=\"js/jquery.js\"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src=\"js/bootstrap.min.js\"></script>
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
        return array (  184 => 121,  181 => 120,  74 => 15,  71 => 14,  61 => 6,  55 => 5,  49 => 125,  47 => 120,  44 => 119,  42 => 14,  35 => 11,  33 => 6,  29 => 5,  23 => 1,);
    }
}
