<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0bb7e6b8630edd06e7a98062ff4a9b607c09da7c736d116a38aad018ee9e694e extends Twig_Template
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
        $__internal_61b28b78bcf617dcfc240daeaa2b90353417305f745288c96aea7e687156356b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b28b78bcf617dcfc240daeaa2b90353417305f745288c96aea7e687156356b->enter($__internal_61b28b78bcf617dcfc240daeaa2b90353417305f745288c96aea7e687156356b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b396f0c2f7edb2bbdc87ea469bb4f43f1284599bef12b63ded8fd3fba85a723c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b396f0c2f7edb2bbdc87ea469bb4f43f1284599bef12b63ded8fd3fba85a723c->enter($__internal_b396f0c2f7edb2bbdc87ea469bb4f43f1284599bef12b63ded8fd3fba85a723c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_61b28b78bcf617dcfc240daeaa2b90353417305f745288c96aea7e687156356b->leave($__internal_61b28b78bcf617dcfc240daeaa2b90353417305f745288c96aea7e687156356b_prof);

        
        $__internal_b396f0c2f7edb2bbdc87ea469bb4f43f1284599bef12b63ded8fd3fba85a723c->leave($__internal_b396f0c2f7edb2bbdc87ea469bb4f43f1284599bef12b63ded8fd3fba85a723c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
