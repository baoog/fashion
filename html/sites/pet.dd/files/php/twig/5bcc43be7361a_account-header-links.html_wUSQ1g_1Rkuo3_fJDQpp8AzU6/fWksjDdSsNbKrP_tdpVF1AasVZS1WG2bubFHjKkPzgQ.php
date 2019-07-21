<?php

/* profiles/contrib/social/modules/social_features/social_user/templates/account-header-links.html.twig */
class __TwigTemplate_6d68d8954b0c301f153e8c2d39dd4dccbafa3fc86f7ccd78cb83862eb32d1183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("for" => 17, "if" => 19);
        $filters = array("without" => 17);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
                array('without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 15
        echo "
<ul class=\"nav navbar-nav\">
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_without(($context["links"] ?? null), "search_block"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if (( !$this->getAttribute($context["item"], "access", array(), "any", true, true) || $this->getAttribute($context["item"], "access", array()))) {
                // line 18
                echo "    <li class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "classes", array()), "html", null, true));
                echo "\">
        <a href=\"";
                // line 19
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                echo "\" class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "link_classes", array()), "html", null, true));
                echo "\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "link_attributes", array()), "html", null, true));
                echo " ";
                if ($this->getAttribute($context["item"], "title", array())) {
                    echo " title=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo "\" ";
                }
                echo ">
          ";
                // line 20
                if ($this->getAttribute($context["item"], "icon_image", array())) {
                    // line 21
                    echo "            ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "icon_image", array()), "html", null, true));
                    echo "
          ";
                } elseif ($this->getAttribute(                // line 22
$context["item"], "icon_classes", array())) {
                    // line 23
                    echo "            <svg class=\"navbar-nav__icon ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "icon_classes", array()), "html", null, true));
                    echo "\">
              <use xlink:href=\"#";
                    // line 24
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "icon_classes", array()), "html", null, true));
                    echo "\" />
            </svg>
          ";
                }
                // line 27
                echo "          <span class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title_classes", array()), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true));
                echo "</span>
        </a>
        ";
                // line 29
                if ($this->getAttribute($context["item"], "below", array())) {
                    // line 30
                    echo "            ";
                    if (twig_test_iterable($this->getAttribute($context["item"], "below", array()))) {
                        // line 31
                        echo "              <ul class=\"dropdown-menu\">
                ";
                        // line 32
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "below", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            if (( !$this->getAttribute($context["item"], "access", array(), "any", true, true) || $this->getAttribute($context["item"], "access", array()))) {
                                // line 33
                                echo "                  ";
                                if ($this->getAttribute($context["item"], "url", array())) {
                                    // line 34
                                    echo "                    <li class=\"";
                                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "classes", array()), "html", null, true));
                                    echo "\">
                      <a href=\"";
                                    // line 35
                                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                                    echo "\" class=\"";
                                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "link_classes", array()), "html", null, true));
                                    echo "\" ";
                                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "link_attributes", array()), "html", null, true));
                                    echo " ";
                                    if ($this->getAttribute($context["item"], "title", array())) {
                                        echo " title=\"";
                                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                                        echo "\" ";
                                    }
                                    echo ">
                        <span class=\"";
                                    // line 36
                                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title_classes", array()), "html", null, true));
                                    echo "\">";
                                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true));
                                    echo "</span>
                        ";
                                    // line 37
                                    if ($this->getAttribute($context["item"], "count_icon", array())) {
                                        // line 38
                                        echo "                          <span class=\"";
                                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "count_classes", array()), "html", null, true));
                                        echo "\">";
                                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "count_icon", array()), "html", null, true));
                                        echo "</span>
                        ";
                                    }
                                    // line 40
                                    echo "                      </a>
                    </li>
                  ";
                                } elseif ($this->getAttribute(                                // line 42
$context["item"], "divider", array())) {
                                    // line 43
                                    echo "                    <li class=\"";
                                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "classes", array()), "html", null, true));
                                    echo "\"></li>
                  ";
                                } else {
                                    // line 45
                                    echo "                    <li class=\"";
                                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "classes", array()), "html", null, true));
                                    echo "\" ";
                                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                                    echo ">
                      ";
                                    // line 46
                                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "tagline", array()), "html", null, true));
                                    echo "
                      <strong class=\"text-truncate\"> ";
                                    // line 47
                                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "object", array()), "html", null, true));
                                    echo " </strong>
                    </li>
                  ";
                                }
                                // line 50
                                echo "                ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 51
                        echo "              </ul>
            ";
                    } else {
                        // line 53
                        echo "                <ul class=\"dropdown-menu\">
                    ";
                        // line 54
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "below", array()), "html", null, true));
                        echo "
                </ul>
            ";
                    }
                    // line 57
                    echo "        ";
                }
                // line 58
                echo "    </li>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_user/templates/account-header-links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 60,  202 => 58,  199 => 57,  193 => 54,  190 => 53,  186 => 51,  179 => 50,  173 => 47,  169 => 46,  162 => 45,  156 => 43,  154 => 42,  150 => 40,  142 => 38,  140 => 37,  134 => 36,  120 => 35,  115 => 34,  112 => 33,  107 => 32,  104 => 31,  101 => 30,  99 => 29,  91 => 27,  85 => 24,  80 => 23,  78 => 22,  73 => 21,  71 => 20,  57 => 19,  52 => 18,  47 => 17,  43 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/modules/social_features/social_user/templates/account-header-links.html.twig", "C:\\Users\\ASUS\\DIR\\html\\profiles\\contrib\\social\\modules\\social_features\\social_user\\templates\\account-header-links.html.twig");
    }
}
