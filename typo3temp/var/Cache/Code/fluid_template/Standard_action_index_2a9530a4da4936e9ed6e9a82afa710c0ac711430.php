<?php

class Standard_action_index_2a9530a4da4936e9ed6e9a82afa710c0ac711430 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<div class="scaffold-topbar t3js-scaffold-topbar">
	<div class="topbar">
		<div class="topbar-header t3js-topbar-header">
			<button class="topbar-button topbar-button-modulemenu t3js-topbar-button-modulemenu">
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['identifier'] = NULL;
$arguments1['size'] = 'small';
$arguments1['overlay'] = NULL;
$arguments1['state'] = 'default';
$arguments1['alternativeMarkupIdentifier'] = NULL;
$arguments1['identifier'] = 'actions-menu';
$arguments1['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
			</button>
			<button class="topbar-button topbar-button-navigationcomponent t3js-topbar-button-navigationcomponent">
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['identifier'] = NULL;
$arguments3['size'] = 'small';
$arguments3['overlay'] = NULL;
$arguments3['state'] = 'default';
$arguments3['alternativeMarkupIdentifier'] = NULL;
$arguments3['identifier'] = 'actions-pagetree';
$arguments3['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
			</button>
			<div class="topbar-header-site">
				<a href="./" target="_top" title="';
$array5 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('siteName', $array5), ENT_QUOTES);

$output0 .= ' - ';
$array6 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('applicationVersion', $array6), ENT_QUOTES);

$output0 .= '">
					<span class="topbar-header-site-logo">
						<img src="';
$array7 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('logoUrl', $array7), ENT_QUOTES);

$output0 .= '" width="';
$array8 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('logoWidth', $array8), ENT_QUOTES);

$output0 .= '" height="';
$array9 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('logoHeight', $array9), ENT_QUOTES);

$output0 .= '" title="TYPO3 Content Management System" alt="" />
					</span>
					<span class="topbar-header-site-title">
						<span class="topbar-header-site-name">';
$array10 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('siteName', $array10), ENT_QUOTES);

$output0 .= '</span>
						<span class="topbar-header-site-version">';
$array11 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('applicationVersion', $array11), ENT_QUOTES);

$output0 .= '</span>
					</span>
				</a>
			</div>
			<button class="topbar-button topbar-button-toolbar t3js-topbar-button-toolbar">
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['identifier'] = NULL;
$arguments12['size'] = 'small';
$arguments12['overlay'] = NULL;
$arguments12['state'] = 'default';
$arguments12['alternativeMarkupIdentifier'] = NULL;
$arguments12['identifier'] = 'actions-system-extension-configure';
$arguments12['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '
			</button>
			<button class="topbar-button topbar-button-search t3js-topbar-button-search">
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['identifier'] = NULL;
$arguments14['size'] = 'small';
$arguments14['overlay'] = NULL;
$arguments14['state'] = 'default';
$arguments14['alternativeMarkupIdentifier'] = NULL;
$arguments14['identifier'] = 'actions-search';
$arguments14['alternativeMarkupIdentifier'] = 'inline';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
			</button>
		</div>
	</div>
</div>
<div class="scaffold-toolbar t3js-scaffold-toolbar">
	<div class="toolbar t3js-topbar-toolbar">
		<ul class="toolbar-list" data-typo3-role="typo3-module-menu">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$array18 = array (
);return $renderingContext->getVariableProvider()->getByPath('toolbar', $array18);
};
$arguments16 = array();
$arguments16['value'] = NULL;

$output0 .= isset($arguments16['value']) ? $arguments16['value'] : $renderChildrenClosure17();

$output0 .= '
		</ul>
	</div>
</div>
';

return $output0;
}


}
#