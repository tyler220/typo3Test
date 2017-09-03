<?php

class partial_Logo_393e228b90901a24151581efbec65752607f028a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
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
  'threeme' => 
  array (
    0 => 'THREEME\\Threeme\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return '@TODO: sys_language_uid in Link';
};
$arguments1 = array();

$output0 .= NULL;

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['alt'] = NULL;
$arguments16['ismap'] = NULL;
$arguments16['longdesc'] = NULL;
$arguments16['usemap'] = NULL;
$arguments16['src'] = NULL;
$arguments16['treatIdAsReference'] = NULL;
$arguments16['image'] = NULL;
$arguments16['crop'] = NULL;
$arguments16['cropVariant'] = 'default';
$arguments16['width'] = NULL;
$arguments16['height'] = NULL;
$arguments16['minWidth'] = NULL;
$arguments16['minHeight'] = NULL;
$arguments16['maxWidth'] = NULL;
$arguments16['maxHeight'] = NULL;
$arguments16['absolute'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['src'] = NULL;
$arguments18['treatIdAsReference'] = false;
$arguments18['image'] = NULL;
$arguments18['crop'] = NULL;
$arguments18['cropVariant'] = 'default';
$arguments18['width'] = NULL;
$arguments18['height'] = NULL;
$arguments18['minWidth'] = NULL;
$arguments18['minHeight'] = NULL;
$arguments18['maxWidth'] = NULL;
$arguments18['maxHeight'] = NULL;
$arguments18['absolute'] = false;
// Rendering ViewHelper THREEME\Threeme\ViewHelpers\ConstantViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['constant'] = '';
$arguments20['constant'] = 'threeme.frontend.logo';
$arguments18['src'] = THREEME\Threeme\ViewHelpers\ConstantViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);
$arguments16['src'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
$arguments16['class'] = 'threeme-navbar-logo';
$arguments16['title'] = '';

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
    <span class="sr-only">';
$array22 = array (
);
$output15 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('siteTitle', $array22), ENT_QUOTES);

$output15 .= '</span>
';
return $output15;
};
$arguments3 = array();
$arguments3['pageUid'] = NULL;
$arguments3['additionalParams'] = array (
);
$arguments3['pageType'] = 0;
$arguments3['noCache'] = false;
$arguments3['noCacheHash'] = false;
$arguments3['section'] = '';
$arguments3['linkAccessRestrictedPages'] = false;
$arguments3['absolute'] = false;
$arguments3['addQueryString'] = false;
$arguments3['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments3['addQueryStringMethod'] = NULL;
$arguments3['additionalAttributes'] = NULL;
$arguments3['data'] = NULL;
$arguments3['class'] = NULL;
$arguments3['dir'] = NULL;
$arguments3['id'] = NULL;
$arguments3['lang'] = NULL;
$arguments3['style'] = NULL;
$arguments3['title'] = NULL;
$arguments3['accesskey'] = NULL;
$arguments3['tabindex'] = NULL;
$arguments3['onclick'] = NULL;
$arguments3['target'] = NULL;
$arguments3['rel'] = NULL;
// Rendering ViewHelper THREEME\Threeme\ViewHelpers\ConstantViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['constant'] = '';
$arguments5['constant'] = 'threeme.frontend.pidHome';
$arguments3['pageUid'] = THREEME\Threeme\ViewHelpers\ConstantViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);
$output7 = '';

$output7 .= 'navbar-brand ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['0'] = $renderingContext->getVariableProvider()->getByPath('print', $array11);

$expression12 = function($context) {return ($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$arguments8['then'] = 'visible-print';

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
$arguments3['class'] = $output7;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['key'] = 'logo.label';
$arguments13['extensionName'] = 'threeme';
$arguments3['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#