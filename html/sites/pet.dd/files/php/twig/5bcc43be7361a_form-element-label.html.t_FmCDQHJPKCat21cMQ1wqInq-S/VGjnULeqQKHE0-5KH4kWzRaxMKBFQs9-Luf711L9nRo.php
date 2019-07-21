<?php

/* profiles/contrib/social/themes/socialbase/templates/form/form-element-label.html.twig */
class __TwigTemplate_eb58ab09616666affd381691f890d629ae69247a195d7d267a266cbd89250f3f extends Twig_Template
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
        $tags = array("set" => 21, "if" => 31);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 21
        $context["classes"] = array(0 => "control-label", 1 => (((        // line 23
($context["title_display"] ?? null) == "after")) ? ("option") : ("")), 2 => (((        // line 24
($context["title_display"] ?? null) == "invisible")) ? ("sr-only") : ("")), 3 => (((        // line 25
($context["title_display"] ?? null) == "above")) ? ("control-label--above") : ("")), 4 => ((        // line 26
($context["required"] ?? null)) ? ("js-form-required") : ("")), 5 => ((        // line 27
($context["required"] ?? null)) ? ("form-required") : ("")));
        // line 31
        if ( !twig_test_empty(($context["title"] ?? null))) {
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["element"] ?? null), "html", null, true));
            echo "
  <label";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            // line 34
            if (($context["description"] ?? null)) {
                // line 35
                echo "<p class=\"help-block\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true));
                echo "</p>";
            }
            // line 37
            echo "</label>";
            // line 38
            if ((($context["required"] ?? null) && (($context["title_display"] ?? null) != "invisible"))) {
                // line 39
                echo "<span class=\"form-required\">*</span>";
            }
        }
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/form/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 39,  69 => 38,  67 => 37,  62 => 35,  60 => 34,  56 => 33,  52 => 32,  50 => 31,  48 => 27,  47 => 26,  46 => 25,  45 => 24,  44 => 23,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/themes/socialbase/templates/form/form-element-label.html.twig", "C:\\Users\\ASUS\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\form\\form-element-label.html.twig");
    }
}
