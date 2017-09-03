<?php

class Standard_action_Home_15836d23b18dcee3884ce395199ab0faa89cda43 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Website';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * section Website
 */
public function section_2e8a57cc5c472f4ac3b071979a38e80db7e59e87(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <!--TYPO3SEARCH_begin-->
    <div class="threeme-carousel">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['data'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.threemeDynamicContent';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array4);
$array3['colPos'] = 200;
$arguments1['data'] = $array3;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    </div>

    <main id="threeme-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['typoscriptObjectPath'] = NULL;
$arguments5['data'] = NULL;
$arguments5['currentValueKey'] = NULL;
$arguments5['table'] = '';
$arguments5['typoscriptObjectPath'] = 'lib.threemeDynamicContent';
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array8);
$array7['colPos'] = 201;
$arguments5['data'] = $array7;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
                </div>
            </div>
        </div>

        <div class="threeme-banner">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['typoscriptObjectPath'] = NULL;
$arguments9['data'] = NULL;
$arguments9['currentValueKey'] = NULL;
$arguments9['table'] = '';
$arguments9['typoscriptObjectPath'] = 'lib.threemeDynamicContent';
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array12);
$array11['colPos'] = 202;
$arguments9['data'] = $array11;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['typoscriptObjectPath'] = NULL;
$arguments13['data'] = NULL;
$arguments13['currentValueKey'] = NULL;
$arguments13['table'] = '';
$arguments13['typoscriptObjectPath'] = 'lib.threemeDynamicContent';
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array16);
$array15['colPos'] = 1;
$arguments13['data'] = $array15;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
                </div>
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['typoscriptObjectPath'] = NULL;
$arguments17['data'] = NULL;
$arguments17['currentValueKey'] = NULL;
$arguments17['table'] = '';
$arguments17['typoscriptObjectPath'] = 'lib.threemeDynamicContent';
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array20);
$array19['colPos'] = 0;
$arguments17['data'] = $array19;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
                </div>
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['typoscriptObjectPath'] = NULL;
$arguments21['data'] = NULL;
$arguments21['currentValueKey'] = NULL;
$arguments21['table'] = '';
$arguments21['typoscriptObjectPath'] = 'lib.threemeDynamicContent';
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array24);
$array23['colPos'] = 2;
$arguments21['data'] = $array23;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '
                </div>
            </div>
        </div>
    </main>
    <!--TYPO3SEARCH_end-->
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output25 = '';

$output25 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['name'] = NULL;
$arguments26['name'] = 'Website';

$output25 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext), ENT_QUOTES);

$output25 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
    <!--TYPO3SEARCH_begin-->
    <div class="threeme-carousel">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['typoscriptObjectPath'] = NULL;
$arguments31['data'] = NULL;
$arguments31['currentValueKey'] = NULL;
$arguments31['table'] = '';
$arguments31['typoscriptObjectPath'] = 'lib.threemeDynamicContent';
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array34);
$array33['colPos'] = 200;
$arguments31['data'] = $array33;

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
    </div>

    <main id="threeme-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['typoscriptObjectPath'] = NULL;
$arguments35['data'] = NULL;
$arguments35['currentValueKey'] = NULL;
$arguments35['table'] = '';
$arguments35['typoscriptObjectPath'] = 'lib.threemeDynamicContent';
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array38);
$array37['colPos'] = 201;
$arguments35['data'] = $array37;

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output30 .= '
                </div>
            </div>
        </div>

        <div class="threeme-banner">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['typoscriptObjectPath'] = NULL;
$arguments39['data'] = NULL;
$arguments39['currentValueKey'] = NULL;
$arguments39['table'] = '';
$arguments39['typoscriptObjectPath'] = 'lib.threemeDynamicContent';
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array42);
$array41['colPos'] = 202;
$arguments39['data'] = $array41;

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output30 .= '
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['typoscriptObjectPath'] = NULL;
$arguments43['data'] = NULL;
$arguments43['currentValueKey'] = NULL;
$arguments43['table'] = '';
$arguments43['typoscriptObjectPath'] = 'lib.threemeDynamicContent';
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array46);
$array45['colPos'] = 1;
$arguments43['data'] = $array45;

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output30 .= '
                </div>
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['typoscriptObjectPath'] = NULL;
$arguments47['data'] = NULL;
$arguments47['currentValueKey'] = NULL;
$arguments47['table'] = '';
$arguments47['typoscriptObjectPath'] = 'lib.threemeDynamicContent';
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array50);
$array49['colPos'] = 0;
$arguments47['data'] = $array49;

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output30 .= '
                </div>
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['typoscriptObjectPath'] = NULL;
$arguments51['data'] = NULL;
$arguments51['currentValueKey'] = NULL;
$arguments51['table'] = '';
$arguments51['typoscriptObjectPath'] = 'lib.threemeDynamicContent';
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array54);
$array53['colPos'] = 2;
$arguments51['data'] = $array53;

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output30 .= '
                </div>
            </div>
        </div>
    </main>
    <!--TYPO3SEARCH_end-->
';
return $output30;
};
$arguments28 = array();
$arguments28['name'] = NULL;
$arguments28['name'] = 'Website';

$output25 .= '';

$output25 .= '

';

return $output25;
}


}
#