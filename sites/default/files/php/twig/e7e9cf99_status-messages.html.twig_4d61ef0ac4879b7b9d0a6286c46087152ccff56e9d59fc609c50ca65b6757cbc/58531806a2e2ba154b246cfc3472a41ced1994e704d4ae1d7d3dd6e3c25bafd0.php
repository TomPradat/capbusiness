<?php

/* themes/bootstrap/templates/status-messages.html.twig */
class __TwigTemplate_affea236085dad5a7d4e0a4887e78e201c46a5e647a6115e833fbd1504e64aca extends Twig_Template
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
        $tags = array("set" => 29, "for" => 44, "if" => 54);
        $filters = array("t" => 30, "length" => 57, "first" => 64);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('t', 'length', 'first'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 29
        $context["status_heading"] = array("status" => t("Status message"), "error" => t("Error message"), "warning" => t("Warning message"), "info" => t("Informative message"));
        // line 37
        $context["status_classes"] = array("status" => "success", "error" => "danger", "warning" => "warning", "info" => "info");
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 46
            $context["classes"] = array(0 => "alert", 1 => ("alert-" . $this->getAttribute(            // line 48
(isset($context["status_classes"]) ? $context["status_classes"] : null), $context["type"], array(), "array")), 2 => "alert-dismissible");
            // line 52
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo " role=\"alert\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
  ";
            // line 54
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                // line 55
                echo "    <h4 class=\"sr-only\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                echo "</h4>
  ";
            }
            // line 57
            echo "  ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 58
                echo "    <ul class=\"item-list item-list--messages\">
      ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 60
                    echo "        <li class=\"item item--message\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "    </ul>
  ";
            } else {
                // line 64
                echo "    ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "
  ";
            }
            // line 66
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 66,  91 => 64,  87 => 62,  78 => 60,  74 => 59,  71 => 58,  68 => 57,  62 => 55,  60 => 54,  54 => 52,  52 => 48,  51 => 46,  47 => 44,  45 => 37,  43 => 29,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for status messages.*/
/*  **/
/*  * Displays status, error, and warning messages, grouped by type.*/
/*  **/
/*  * An invisible heading identifies the messages for assistive technology.*/
/*  * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html*/
/*  * for info.*/
/*  **/
/*  * Add an ARIA label to the contentinfo area so that assistive technology*/
/*  * user agents will better describe this landmark.*/
/*  **/
/*  * Available variables:*/
/*  * - message_list: List of messages to be displayed, grouped by type.*/
/*  * - status_headings: List of all status types.*/
/*  * - display: (optional) May have a value of 'status' or 'error' when only*/
/*  *   displaying messages of that specific type.*/
/*  * - attributes: HTML attributes for the element, including:*/
/*  *   - class: HTML classes.*/
/*  **/
/*  * @see template_preprocess_status_messages()*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {%*/
/*   set status_heading = {*/
/*     'status': 'Status message'|t,*/
/*     'error': 'Error message'|t,*/
/*     'warning': 'Warning message'|t,*/
/*     'info': 'Informative message'|t,*/
/*   }*/
/* %}*/
/* {%*/
/*   set status_classes = {*/
/*     'status': 'success',*/
/*     'error': 'danger',*/
/*     'warning': 'warning',*/
/*     'info': 'info',*/
/*   }*/
/* %}*/
/* {% for type, messages in message_list %}*/
/* {%*/
/*   set classes = [*/
/*     'alert',*/
/*     'alert-' ~ status_classes[type],*/
/*     'alert-dismissible',*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }} role="alert">*/
/*   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*   {% if status_headings[type] %}*/
/*     <h4 class="sr-only">{{ status_headings[type] }}</h4>*/
/*   {% endif %}*/
/*   {% if messages|length > 1 %}*/
/*     <ul class="item-list item-list--messages">*/
/*       {% for message in messages %}*/
/*         <li class="item item--message">{{ message }}</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% else %}*/
/*     {{ messages|first }}*/
/*   {% endif %}*/
/* </div>*/
/* {% endfor %}*/
/* */
