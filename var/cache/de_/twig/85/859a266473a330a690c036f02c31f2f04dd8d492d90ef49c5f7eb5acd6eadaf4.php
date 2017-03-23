<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_1c665dbb459ca40ce38bedee2245df5aeee83a208f2a867b9d79ef91b5439304 extends Twig_Template
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
        $__internal_73af8ebe63bdf1d228bb76c05663e88889bdc6c25ea823c9ceb9a00c484b8f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73af8ebe63bdf1d228bb76c05663e88889bdc6c25ea823c9ceb9a00c484b8f0e->enter($__internal_73af8ebe63bdf1d228bb76c05663e88889bdc6c25ea823c9ceb9a00c484b8f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_5a49b346dd87e0e61ba84cf6ff41c87fa67263916871b17dcf0ca0fb4905b0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a49b346dd87e0e61ba84cf6ff41c87fa67263916871b17dcf0ca0fb4905b0e9->enter($__internal_5a49b346dd87e0e61ba84cf6ff41c87fa67263916871b17dcf0ca0fb4905b0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_73af8ebe63bdf1d228bb76c05663e88889bdc6c25ea823c9ceb9a00c484b8f0e->leave($__internal_73af8ebe63bdf1d228bb76c05663e88889bdc6c25ea823c9ceb9a00c484b8f0e_prof);

        
        $__internal_5a49b346dd87e0e61ba84cf6ff41c87fa67263916871b17dcf0ca0fb4905b0e9->leave($__internal_5a49b346dd87e0e61ba84cf6ff41c87fa67263916871b17dcf0ca0fb4905b0e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
