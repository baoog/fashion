<?php

/* profiles/contrib/social/themes/socialbase/templates/system/details--plain.html.twig */
class __TwigTemplate_6361da1eb46d77f57106a292c0226b7e7b1649d03974db2ab3bc87fa317dc2e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 17, "if" => 29, "block" => 30);
        $filters = array("clean_class" => 23);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class'),
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

        // line 17
        $context["heading"] = ($context["title"] ?? null);
        // line 18
        $context["body"] = ($context["children"] ?? null);
        // line 19
        echo "
";
        // line 21
        $context["classes"] = array(0 => "panel", 1 => ((        // line 23
($context["errors"] ?? null)) ? ("panel-danger") : (("panel-" . \Drupal\Component\Utility\Html::getClass(($context["panel_type"] ?? null))))));
        // line 26
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "removeClass", array(0 => "form-wrapper"), "method"), "html", null, true));
        echo ">
  ";
        // line 28
        echo "
  ";
        // line 29
        if (($context["heading"] ?? null)) {
            // line 30
            echo "    ";
            $this->displayBlock('heading', $context, $blocks);
            // line 46
            echo "  ";
        }
        // line 47
        echo "
  ";
        // line 49
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "
  ";
        // line 78
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 79
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
            // line 87
            echo "  ";
        }
        // line 88
        echo "
</div>
";
    }

    // line 30
    public function block_heading($context, array $blocks = array())
    {
        // line 31
        echo "      <div class=\"panel-heading\">
        <header>
          ";
        // line 34
        $context["heading_classes"] = array(0 => "panel-title");
        // line 38
        echo "          ";
        if (($context["collapsible"] ?? null)) {
            // line 39
            echo "            <a";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading_attributes"] ?? null), "addClass", array(0 => ($context["heading_classes"] ?? null)), "method"), "html", null, true));
            echo " href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["target"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true));
            echo "</a>
          ";
        } else {
            // line 41
            echo "            <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["heading_attributes"] ?? null), "addClass", array(0 => ($context["heading_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true));
            echo "</div>
          ";
        }
        // line 43
        echo "        </header>
      </div>
    ";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        // line 51
        $context["body_classes"] = array(0 => "panel-body", 1 => ((        // line 53
($context["collapsible"] ?? null)) ? ("panel-collapse") : ("")), 2 => ((        // line 54
($context["collapsible"] ?? null)) ? ("collapse") : ("")), 3 => ((        // line 55
($context["collapsible"] ?? null)) ? ("fade") : ("")), 4 => (((        // line 56
($context["errors"] ?? null) || (($context["collapsible"] ?? null) &&  !($context["collapsed"] ?? null)))) ? ("in") : ("")));
        // line 59
        echo "    ";
        // line 60
        $context["description_classes"] = array(0 => "help-block", 1 => (((        // line 62
($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", array()) == "invisible"))) ? ("sr-only") : ("")));
        // line 65
        echo "
    <div";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["body_attributes"] ?? null), "addClass", array(0 => ($context["body_classes"] ?? null)), "method"), "html", null, true));
        echo ">
      ";
        // line 67
        if ((($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", array()) == "before"))) {
            // line 68
            echo "        <p";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "</p>
      ";
        }
        // line 70
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "
      ";
        // line 71
        if (((($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", array()) == "after")) || ($this->getAttribute(($context["description"] ?? null), "position", array()) == "invisible"))) {
            // line 72
            echo "        <p";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "</p>
      ";
        }
        // line 74
        echo "    </div>
  ";
    }

    // line 79
    public function block_footer($context, array $blocks = array())
    {
        // line 80
        echo "      ";
        // line 81
        $context["footer_classes"] = array(0 => "panel-footer");
        // line 85
        echo "      <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["footer_attributes"] ?? null), "addClass", array(0 => ($context["footer_classes"] ?? null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
        echo "</div>
    ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/system/details--plain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 85,  190 => 81,  188 => 80,  185 => 79,  180 => 74,  172 => 72,  170 => 71,  165 => 70,  157 => 68,  155 => 67,  151 => 66,  148 => 65,  146 => 62,  145 => 60,  143 => 59,  141 => 56,  140 => 55,  139 => 54,  138 => 53,  137 => 51,  135 => 50,  132 => 49,  126 => 43,  118 => 41,  108 => 39,  105 => 38,  103 => 34,  99 => 31,  96 => 30,  90 => 88,  87 => 87,  84 => 79,  81 => 78,  78 => 76,  75 => 49,  72 => 47,  69 => 46,  66 => 30,  64 => 29,  61 => 28,  56 => 26,  54 => 23,  53 => 21,  50 => 19,  48 => 18,  46 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/themes/socialbase/templates/system/details--plain.html.twig", "C:\\Users\\ASUS\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\system\\details--plain.html.twig");
    }
}
