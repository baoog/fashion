<?php

/* input.html.twig */
class __TwigTemplate_b445ff0c05e8cde89d0c85f980d391026f2b50cdbfd29294135003ad49398fb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 23, "spaceless" => 38, "if" => 40, "block" => 50);
        $filters = array();
        $functions = array("attach_library" => 41);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'spaceless', 'if', 'block'),
                array(),
                array('attach_library')
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

        // line 23
        $context["classes"] = array(0 => ((((        // line 24
($context["type"] ?? null) != "submit") && (($context["type"] ?? null) != "button"))) ? ("form-control") : ("")), 1 => (((        // line 25
($context["type"] ?? null) == "button")) ? ("btn") : ("")), 2 => (((        // line 26
($context["type"] ?? null) == "submit")) ? ("btn js-form-submit") : ("")), 3 => ((        // line 27
($context["float_right"] ?? null)) ? ("pull-right") : ("")), 4 => (((        // line 28
($context["button_level"] ?? null) == "raised")) ? ("btn-raised") : ("")), 5 => (((        // line 29
($context["button_type"] ?? null) == "default")) ? ("btn-default") : ("")), 6 => (((        // line 30
($context["button_type"] ?? null) == "flat")) ? ("btn-flat") : ("")), 7 => (((        // line 31
($context["button_type"] ?? null) == "primary")) ? ("btn-primary") : ("")), 8 => (((        // line 32
($context["button_type"] ?? null) == "accent")) ? ("btn-accent") : ("")), 9 => (((        // line 33
($context["button_size"] ?? null) == "small")) ? ("btn-sm") : ("")), 10 => (($this->getAttribute(        // line 34
($context["attributes"] ?? null), "hasClass", array(0 => "crop-preview-wrapper__crop-reset"), "method")) ? ("btn-flat") : ("")), 11 => ((((        // line 35
($context["icon"] ?? null) && ($context["icon_position"] ?? null)) &&  !($context["icon_only"] ?? null))) ? (("icon-" . ($context["icon_position"] ?? null))) : ("")));
        // line 38
        ob_start();
        // line 39
        echo "
  ";
        // line 40
        if (($context["input_group"] ?? null)) {
            // line 41
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/form--input-groups"), "html", null, true));
            echo "

    <div class=\"input-group\">
  ";
        }
        // line 45
        echo "
  ";
        // line 46
        if (($context["prefix"] ?? null)) {
            // line 47
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        $this->displayBlock('input', $context, $blocks);
        // line 53
        echo "
  ";
        // line 54
        if (($context["suffix"] ?? null)) {
            // line 55
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 57
        echo "
  ";
        // line 58
        if (($context["input_group"] ?? null)) {
            // line 59
            echo "    </div>
  ";
        }
        // line 61
        echo "
  ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 50
    public function block_input($context, array $blocks = array())
    {
        // line 51
        echo "    <input";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo " />
  ";
    }

    public function getTemplateName()
    {
        return "input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 51,  119 => 50,  112 => 62,  109 => 61,  105 => 59,  103 => 58,  100 => 57,  94 => 55,  92 => 54,  89 => 53,  87 => 50,  84 => 49,  78 => 47,  76 => 46,  73 => 45,  65 => 41,  63 => 40,  60 => 39,  58 => 38,  56 => 35,  55 => 34,  54 => 33,  53 => 32,  52 => 31,  51 => 30,  50 => 29,  49 => 28,  48 => 27,  47 => 26,  46 => 25,  45 => 24,  44 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "input.html.twig", "profiles/contrib/social/themes/socialbase/templates/form/input.html.twig");
    }
}
