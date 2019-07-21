<?php

/* profiles/contrib/social/themes/socialbase/templates/layout/page.html.twig */
class __TwigTemplate_c7c34049b71b0b4189f1d9fc7c01a2af0ebcb3ba6789ae48afb17390fc742ed3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'section' => array($this, 'block_section'),
            'content' => array($this, 'block_content'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 36, "block" => 59);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
                array(),
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

        // line 35
        echo "
";
        // line 36
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 37
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
";
        }
        // line 39
        echo "
<main id=\"content\" class=\"main-container\" role=\"main\">

  ";
        // line 42
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
            // line 43
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "
  ";
        }
        // line 45
        echo "
  ";
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "hero", array())) {
            // line 47
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "hero", array()), "html", null, true));
            echo "
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        if ($this->getAttribute(($context["page"] ?? null), "secondary_navigation", array())) {
            // line 51
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_navigation", array()), "html", null, true));
            echo "
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 55
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
  ";
        }
        // line 57
        echo "
  ";
        // line 59
        echo "  ";
        $this->displayBlock('section', $context, $blocks);
        // line 98
        echo "
  ";
        // line 99
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 100
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
  ";
        }
        // line 102
        echo "
</main>

";
        // line 105
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 106
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
";
        }
    }

    // line 59
    public function block_section($context, array $blocks = array())
    {
        // line 60
        echo "    <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_attributes"] ?? null), "html", null, true));
        echo ">

      ";
        // line 62
        if (($this->getAttribute(($context["page"] ?? null), "title", array()) && ($context["display_page_title"] ?? null))) {
            // line 63
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true));
            echo "
      ";
        }
        // line 65
        echo "
      ";
        // line 66
        if (($this->getAttribute(($context["page"] ?? null), "complementary_top", array()) || $this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()))) {
            // line 67
            echo "        <aside class=\"region--complementary\" role=\"complementary\">
          ";
            // line 68
            if ($this->getAttribute(($context["page"] ?? null), "complementary_top", array())) {
                // line 69
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "complementary_top", array()), "html", null, true));
                echo "
          ";
            }
            // line 71
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "complementary_bottom", array())) {
                // line 72
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()), "html", null, true));
                echo "
          ";
            }
            // line 74
            echo "        </aside>
      ";
        }
        // line 76
        echo "
      ";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "
      ";
        // line 83
        echo "      ";
        if ((($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_top", array())) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()))) {
            // line 84
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 87
            echo "      ";
        }
        // line 88
        echo "
      ";
        // line 90
        echo "      ";
        if ((($this->getAttribute(($context["page"] ?? null), "sidebar_second", array()) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_top", array())) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_bottom", array()))) {
            // line 91
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 94
            echo "      ";
        }
        // line 95
        echo "
    </section>
  ";
    }

    // line 77
    public function block_content($context, array $blocks = array())
    {
        // line 78
        echo "        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
      ";
    }

    // line 84
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 85
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
        ";
    }

    // line 91
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 92
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 92,  239 => 91,  232 => 85,  229 => 84,  223 => 79,  220 => 78,  217 => 77,  211 => 95,  208 => 94,  205 => 91,  202 => 90,  199 => 88,  196 => 87,  193 => 84,  190 => 83,  187 => 81,  185 => 77,  182 => 76,  178 => 74,  172 => 72,  169 => 71,  163 => 69,  161 => 68,  158 => 67,  156 => 66,  153 => 65,  147 => 63,  145 => 62,  139 => 60,  136 => 59,  128 => 106,  126 => 105,  121 => 102,  115 => 100,  113 => 99,  110 => 98,  107 => 59,  104 => 57,  98 => 55,  96 => 54,  93 => 53,  87 => 51,  85 => 50,  82 => 49,  76 => 47,  74 => 46,  71 => 45,  65 => 43,  63 => 42,  58 => 39,  52 => 37,  50 => 36,  47 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/themes/socialbase/templates/layout/page.html.twig", "C:\\Users\\ASUS\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\layout\\page.html.twig");
    }
}
