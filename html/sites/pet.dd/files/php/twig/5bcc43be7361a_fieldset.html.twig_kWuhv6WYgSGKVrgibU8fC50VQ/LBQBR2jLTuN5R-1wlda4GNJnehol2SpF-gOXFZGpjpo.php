<?php

/* profiles/contrib/social/themes/socialbase/templates/form/fieldset.html.twig */
class __TwigTemplate_24dc07634c00c93793d99fda68b544a4b19801362ef378f844b51740a00c357b extends Twig_Template
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
        $tags = array("set" => 26, "if" => 46);
        $filters = array("t" => 62);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
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

        // line 26
        $context["classes"] = array(0 => ((        // line 27
($context["form_group"] ?? null)) ? ("form-group") : ("")), 1 => (( !        // line 28
($context["form_group"] ?? null)) ? ("js-form-wrapper") : ("")), 2 => (( !        // line 29
($context["form_group"] ?? null)) ? ("form-wrapper") : ("")));
        // line 32
        echo "<fieldset";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 34
        $context["label_classes"] = array(0 => ((        // line 35
($context["form_group"] ?? null)) ? ("control-label") : ("")), 1 => ((        // line 36
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 37
($context["required"] ?? null)) ? ("form-required") : ("")), 3 => (((        // line 38
($context["title_display"] ?? null) == "invisible")) ? ("sr-only") : ("")));
        // line 41
        echo "  ";
        // line 42
        echo "  <label";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["legend"] ?? null), "attributes", array()), "addClass", array(0 => ($context["label_classes"] ?? null)), "method"), "html", null, true));
        echo ">
    <span";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["legend_span"] ?? null), "attributes", array()), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["legend"] ?? null), "title", array()), "html", null, true));
        echo "</span>
  </label>";
        // line 46
        if (($context["required"] ?? null)) {
            // line 47
            echo "<span class=\"form-required\">*</span>";
        }
        // line 50
        echo "<div class=\"fieldset-wrapper\">
    ";
        // line 51
        if (($context["prefix"] ?? null)) {
            // line 52
            echo "      <span class=\"field-prefix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "</span>
    ";
        }
        // line 54
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
    ";
        // line 55
        if (($context["suffix"] ?? null)) {
            // line 56
            echo "      <span class=\"field-suffix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "</span>
    ";
        }
        // line 58
        echo "  </div>

  ";
        // line 60
        if (($context["errors"] ?? null)) {
            // line 61
            echo "    <div class=\"form-item--error-message alert alert-danger alert-sm alert-dismissible form-control-radius\">
      <a href=\"#\" role=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close")));
            echo "\"><span aria-hidden=\"true\">&times;</span></a>
      ";
            // line 63
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 66
        echo "
  ";
        // line 67
        if ($this->getAttribute(($context["description"] ?? null), "content", array())) {
            // line 68
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", array()), "addClass", array(0 => "help-block"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "</div>
  ";
        }
        // line 70
        echo "
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/form/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 70,  125 => 68,  123 => 67,  120 => 66,  114 => 63,  110 => 62,  107 => 61,  105 => 60,  101 => 58,  95 => 56,  93 => 55,  88 => 54,  82 => 52,  80 => 51,  77 => 50,  74 => 47,  72 => 46,  66 => 43,  61 => 42,  59 => 41,  57 => 38,  56 => 37,  55 => 36,  54 => 35,  53 => 34,  48 => 32,  46 => 29,  45 => 28,  44 => 27,  43 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/themes/socialbase/templates/form/fieldset.html.twig", "C:\\Users\\ASUS\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\form\\fieldset.html.twig");
    }
}
