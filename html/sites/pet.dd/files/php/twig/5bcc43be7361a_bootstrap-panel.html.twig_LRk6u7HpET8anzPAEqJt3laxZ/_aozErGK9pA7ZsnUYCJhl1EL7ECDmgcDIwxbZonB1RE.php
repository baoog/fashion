<?php

/* profiles/contrib/social/themes/socialbase/templates/card/bootstrap-panel.html.twig */
class __TwigTemplate_421c7a5f9ada8778a9d4f48c23ca9b8598068a106764edb6f69104bd531f2630 extends Twig_Template
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
        $tags = array("set" => 47, "if" => 56, "block" => 57);
        $filters = array("clean_class" => 50);
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

        // line 1
        echo "
";
        // line 45
        echo "
";
        // line 47
        $context["classes"] = array(0 => "card", 1 => ((        // line 49
($context["collapsible"] ?? null)) ? ("panel") : ("")), 2 => (((        // line 50
($context["collapsible"] ?? null) && ($context["errors"] ?? null))) ? ("panel-danger") : (("panel-" . \Drupal\Component\Utility\Html::getClass(($context["panel_type"] ?? null))))));
        // line 53
        echo "<fieldset ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">

  ";
        // line 56
        echo "  ";
        if (($context["heading"] ?? null)) {
            // line 57
            echo "    ";
            $this->displayBlock('heading', $context, $blocks);
            // line 66
            echo "  ";
        }
        // line 67
        echo "
  ";
        // line 69
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "
  ";
        // line 104
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 105
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
            // line 113
            echo "  ";
        }
        // line 114
        echo "
</fieldset>
";
    }

    // line 57
    public function block_heading($context, array $blocks = array())
    {
        // line 58
        echo "      <h4 class=\"card__title card__title--underline\">
          ";
        // line 59
        if (($context["collapsible"] ?? null)) {
            // line 60
            echo "            <a";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading_attributes"] ?? null), "html", null, true));
            echo " href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["target"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true));
            echo "</a>
          ";
        } else {
            // line 62
            echo "            <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading_attributes"] ?? null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true));
            echo "</div>
          ";
        }
        // line 64
        echo "      </h4>
    ";
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        // line 71
        $context["body_classes"] = array(0 => "card__block", 1 => ((        // line 73
($context["collapsible"] ?? null)) ? ("panel-collapse") : ("")), 2 => ((        // line 74
($context["collapsible"] ?? null)) ? ("collapse") : ("")), 3 => ((        // line 75
($context["collapsible"] ?? null)) ? ("fade") : ("")), 4 => (((        // line 76
($context["errors"] ?? null) || (($context["collapsible"] ?? null) &&  !($context["collapsed"] ?? null)))) ? ("in") : ("")));
        // line 79
        echo "    ";
        // line 80
        $context["description_classes"] = array(0 => "help-block", 1 => (((        // line 82
($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", array()) == "invisible"))) ? ("sr-only") : ("")));
        // line 85
        echo "
    ";
        // line 86
        if (($context["errors"] ?? null)) {
            // line 87
            echo "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
            // line 88
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "</strong>
      </div>
    ";
        }
        // line 91
        echo "
    <div";
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["body_attributes"] ?? null), "addClass", array(0 => ($context["body_classes"] ?? null)), "method"), "html", null, true));
        echo ">
      ";
        // line 93
        if ((($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", array()) == "before"))) {
            // line 94
            echo "        <p";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "</p>
      ";
        }
        // line 96
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "
      ";
        // line 97
        if (((($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", array()) == "after")) || ($this->getAttribute(($context["description"] ?? null), "position", array()) == "invisible"))) {
            // line 98
            echo "        <p";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => ($context["description_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "</p>
      ";
        }
        // line 100
        echo "    </div>
  ";
    }

    // line 105
    public function block_footer($context, array $blocks = array())
    {
        // line 106
        echo "      ";
        // line 107
        $context["footer_classes"] = array(0 => "card__actionbar");
        // line 111
        echo "      <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["footer_attributes"] ?? null), "addClass", array(0 => ($context["footer_classes"] ?? null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
        echo "</div>
    ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/card/bootstrap-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 111,  198 => 107,  196 => 106,  193 => 105,  188 => 100,  180 => 98,  178 => 97,  173 => 96,  165 => 94,  163 => 93,  159 => 92,  156 => 91,  150 => 88,  147 => 87,  145 => 86,  142 => 85,  140 => 82,  139 => 80,  137 => 79,  135 => 76,  134 => 75,  133 => 74,  132 => 73,  131 => 71,  129 => 70,  126 => 69,  121 => 64,  113 => 62,  103 => 60,  101 => 59,  98 => 58,  95 => 57,  89 => 114,  86 => 113,  83 => 105,  80 => 104,  77 => 102,  74 => 69,  71 => 67,  68 => 66,  65 => 57,  62 => 56,  56 => 53,  54 => 50,  53 => 49,  52 => 47,  49 => 45,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/themes/socialbase/templates/card/bootstrap-panel.html.twig", "C:\\Users\\ASUS\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\card\\bootstrap-panel.html.twig");
    }
}
