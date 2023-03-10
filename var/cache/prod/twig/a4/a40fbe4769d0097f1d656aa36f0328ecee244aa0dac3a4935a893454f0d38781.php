<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/index.html.twig */
class __TwigTemplate_44883fbef1c6b9b5a01fadecc482a884448f33bd88042bca7b61dc6e82dc1266 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Inicio";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <!--begin::Toolbar-->
    <div class=\"app-toolbar align-items-center justify-content-between\">
        <!--begin::Toolbar wrapper-->
        <div class=\"d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10\" id=\"kt_toolbar\">
            <!--begin::Page title-->
            <div class=\"d-flex flex-column align-items-start me-3 gap-2\">
                <!--begin::Title-->
                <h1 class=\"d-flex text-dark fw-bolder m-0 fs-3\">Calendar</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class=\"breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7\">
                    <!--begin::Item-->
                    <li class=\"breadcrumb-item text-gray-600\">
                        <a href=\"../../demo22/dist/index.html\" class=\"text-gray-600 text-hover-primary\">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class=\"breadcrumb-item text-gray-600\">Apps</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class=\"breadcrumb-item text-gray-500\">Calendar</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class=\"d-flex align-items-center py-2\">
                <!--begin::Wrapper-->
                <div class=\"me-3\">
                    <!--begin::Menu-->
                    <a href=\"#\" class=\"btn btn-sm btn-flex btn-light-primary fw-bolder\" data-kt-menu-trigger=\"click\" data-kt-menu-placement=\"bottom-end\">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class=\"svg-icon svg-icon-5 svg-icon-gray-500 me-1\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                <path d=\"M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z\" fill=\"currentColor\" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter</a>
                    <!--begin::Menu 1-->
                    <div class=\"menu menu-sub menu-sub-dropdown w-250px w-md-300px\" data-kt-menu=\"true\" id=\"kt_menu_62446a9fdfdd3\">
                        <!--begin::Header-->
                        <div class=\"px-7 py-5\">
                            <div class=\"fs-5 text-dark fw-bolder\">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class=\"separator border-gray-200\"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class=\"px-7 py-5\">
                            <!--begin::Input group-->
                            <div class=\"mb-10\">
                                <!--begin::Label-->
                                <label class=\"form-label fw-bold\">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class=\"form-select form-select-solid\" data-kt-select2=\"true\" data-placeholder=\"Select option\" data-dropdown-parent=\"#kt_menu_62446a9fdfdd3\" data-allow-clear=\"true\">
                                        <option></option>
                                        <option value=\"1\">Approved</option>
                                        <option value=\"2\">Pending</option>
                                        <option value=\"2\">In Process</option>
                                        <option value=\"2\">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class=\"mb-10\">
                                <!--begin::Label-->
                                <label class=\"form-label fw-bold\">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class=\"d-flex\">
                                    <!--begin::Options-->
                                    <label class=\"form-check form-check-sm form-check-custom form-check-solid me-5\">
                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"1\" />
                                        <span class=\"form-check-label\">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class=\"form-check form-check-sm form-check-custom form-check-solid\">
                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"2\" checked=\"checked\" />
                                        <span class=\"form-check-label\">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class=\"mb-10\">
                                <!--begin::Label-->
                                <label class=\"form-label fw-bold\">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class=\"form-check form-switch form-switch-sm form-check-custom form-check-solid\">
                                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" name=\"notifications\" checked=\"checked\" />
                                    <label class=\"form-check-label\">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class=\"d-flex justify-content-end\">
                                <button type=\"reset\" class=\"btn btn-sm btn-light btn-active-light-primary me-2\" data-kt-menu-dismiss=\"true\">Reset</button>
                                <button type=\"submit\" class=\"btn btn-sm btn-primary\" data-kt-menu-dismiss=\"true\">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Button-->
                <a href=\"#\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#kt_modal_create_app\" id=\"kt_toolbar_primary_button\">Create</a>
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar wrapper-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div class=\"app-content flex-column-fluid\" id=\"kt_app_content\">
        <!--begin::Card-->
        <div class=\"card\">
            <!--begin::Card header-->
            <div class=\"card-header\">
                <h2 class=\"card-title fw-bolder\">Calendar</h2>
                <div class=\"card-toolbar\">
                    <button class=\"btn btn-flex btn-primary\" data-kt-calendar=\"add\">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                        <span class=\"svg-icon svg-icon-2\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                                <rect opacity=\"0.5\" x=\"11.364\" y=\"20.364\" width=\"16\" height=\"2\" rx=\"1\" transform=\"rotate(-90 11.364 20.364)\" fill=\"currentColor\" />
                                <rect x=\"4.36396\" y=\"11.364\" width=\"16\" height=\"2\" rx=\"1\" fill=\"currentColor\" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Add Event</button>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class=\"card-body\">
                <!--begin::Calendar-->
                <div id=\"kt_calendar_app\"></div>
                <!--end::Calendar-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->



    </div>
    <!--end::Content-->
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/index.html.twig", "C:\\xampp\\htdocs\\almacen\\Almacen\\templates\\default\\index.html.twig");
    }
}
