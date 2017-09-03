<?php

class Distribution_action_show_e02d93b1e31f5677d3ad16c7f094f146b18d9a80 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'main';
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
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
  ),
));
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
';
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<div class="distribution-detail">
		<div class="distribution-detail-previewpane">
			';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['src'] = NULL;
$arguments1['width'] = NULL;
$arguments1['height'] = NULL;
$arguments1['fallbackImage'] = '';
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['alt'] = NULL;
$output3 = '';

$output3 .= 'EXT:';
$array4 = array (
);
$output3 .= $renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array4);

$output3 .= '/Resources/Public/Images/DistributionWelcome.png';
$arguments1['src'] = $output3;
$arguments1['fallbackImage'] = 'EXT:extensionmanager/Resources/Public/Images/Distribution.png';
$array5 = array (
);$arguments1['alt'] = $renderingContext->getVariableProvider()->getByPath('distribution.title', $array5);
$arguments1['class'] = 'distribution-detail-preview';
$arguments1['width'] = 300;

$output0 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		</div>
		<div class="distribution-detail-body">
			<div class="distribution-detail-header">
				<h1>';
$array6 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.title', $array6), ENT_QUOTES);

$output0 .= '</h1>
				<p>';
$array7 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.description', $array7), ENT_QUOTES);

$output0 .= '</p>
			</div>
			<ul class="list-unstyled">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['identifier'] = NULL;
$arguments50['size'] = 'small';
$arguments50['overlay'] = NULL;
$arguments50['state'] = 'default';
$arguments50['alternativeMarkupIdentifier'] = NULL;
$arguments50['identifier'] = 'actions-system-extension-import';

$output49 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return 'Install';
};
$arguments52 = array();
$arguments52['key'] = NULL;
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['htmlEscape'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['key'] = 'extensionList.installDistribution';

$output49 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext), ENT_QUOTES);

$output49 .= '
							';
return $output49;
};
$arguments45 = array();
$arguments45['action'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['controller'] = NULL;
$arguments45['extensionName'] = NULL;
$arguments45['pluginName'] = NULL;
$arguments45['pageUid'] = NULL;
$arguments45['pageType'] = 0;
$arguments45['noCache'] = false;
$arguments45['noCacheHash'] = false;
$arguments45['section'] = '';
$arguments45['format'] = '';
$arguments45['linkAccessRestrictedPages'] = false;
$arguments45['additionalParams'] = array (
);
$arguments45['absolute'] = false;
$arguments45['addQueryString'] = false;
$arguments45['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments45['addQueryStringMethod'] = NULL;
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['name'] = NULL;
$arguments45['rel'] = NULL;
$arguments45['rev'] = NULL;
$arguments45['target'] = NULL;
$arguments45['action'] = 'installDistribution';
$arguments45['controller'] = 'Download';
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array48);
$arguments45['arguments'] = $array47;
$arguments45['class'] = 'btn btn-default t3-button-action-installdistribution';

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
						</li>
					';
return $output44;
};
$arguments42 = array();
$arguments42['if'] = NULL;

$output41 .= '';

$output41 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
							<li>
								<a href="';
$array63 = array (
);
$output62 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('configurationLink', $array63), ENT_QUOTES);

$output62 .= '" class="btn btn-default distribution-openViewModule " onclick="top.goToModule(\'web_ViewpageView\');">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['identifier'] = NULL;
$arguments64['size'] = 'small';
$arguments64['overlay'] = NULL;
$arguments64['state'] = 'default';
$arguments64['alternativeMarkupIdentifier'] = NULL;
$arguments64['identifier'] = 'actions-system-extension-configure';

$output62 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['key'] = NULL;
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['htmlEscape'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['key'] = 'extensionList.configure';

$output62 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext), ENT_QUOTES);

$output62 .= '
								</a>
							</li>
						';
return $output62;
};
$arguments57 = array();
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$arguments57['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('configurationLink', $array60);

$expression61 = function($context) {return ($context["node0"]);};
$arguments57['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments57['__thenClosure'] = $renderChildrenClosure58;

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
						<li>
							<button class="btn btn-default distribution-openViewModule" onclick="top.goToModule(\'web_ViewpageView\');">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['identifier'] = NULL;
$arguments68['size'] = 'small';
$arguments68['overlay'] = NULL;
$arguments68['state'] = 'default';
$arguments68['alternativeMarkupIdentifier'] = NULL;
$arguments68['identifier'] = 'actions-document-view';

$output56 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['key'] = NULL;
$arguments70['id'] = NULL;
$arguments70['default'] = NULL;
$arguments70['htmlEscape'] = NULL;
$arguments70['arguments'] = NULL;
$arguments70['extensionName'] = NULL;
$arguments70['key'] = 'distribution.welcome.openViewModule';

$output56 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext), ENT_QUOTES);

$output56 .= '
							</button>
						</li>
						<li>
							<button class="btn btn-default distribution-openPageModule" onclick="top.goToModule(\'web_page\');">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['key'] = NULL;
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['htmlEscape'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['key'] = 'distribution.welcome.openPageModule';

$output56 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext), ENT_QUOTES);

$output56 .= '
							</button>
						</li>
					';
return $output56;
};
$arguments54 = array();

$output41 .= '';

$output41 .= '
				';
return $output41;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['0'] = $renderingContext->getVariableProvider()->getByPath('distributionActive', $array39);

$expression40 = function($context) {return ($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)
					),
					$renderingContext
				);
$arguments8['__elseClosures'][] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['identifier'] = NULL;
$arguments16['size'] = 'small';
$arguments16['overlay'] = NULL;
$arguments16['state'] = 'default';
$arguments16['alternativeMarkupIdentifier'] = NULL;
$arguments16['identifier'] = 'actions-system-extension-import';

$output15 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return 'Install';
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['key'] = 'extensionList.installDistribution';

$output15 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext), ENT_QUOTES);

$output15 .= '
							';
return $output15;
};
$arguments11 = array();
$arguments11['action'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['controller'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['pluginName'] = NULL;
$arguments11['pageUid'] = NULL;
$arguments11['pageType'] = 0;
$arguments11['noCache'] = false;
$arguments11['noCacheHash'] = false;
$arguments11['section'] = '';
$arguments11['format'] = '';
$arguments11['linkAccessRestrictedPages'] = false;
$arguments11['additionalParams'] = array (
);
$arguments11['absolute'] = false;
$arguments11['addQueryString'] = false;
$arguments11['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments11['addQueryStringMethod'] = NULL;
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['name'] = NULL;
$arguments11['rel'] = NULL;
$arguments11['rev'] = NULL;
$arguments11['target'] = NULL;
$arguments11['action'] = 'installDistribution';
$arguments11['controller'] = 'Download';
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array14);
$arguments11['arguments'] = $array13;
$arguments11['class'] = 'btn btn-default t3-button-action-installdistribution';

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
						</li>
					';
return $output10;
};
$arguments8['__thenClosure'] = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
							<li>
								<a href="';
$array27 = array (
);
$output26 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('configurationLink', $array27), ENT_QUOTES);

$output26 .= '" class="btn btn-default distribution-openViewModule " onclick="top.goToModule(\'web_ViewpageView\');">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['identifier'] = NULL;
$arguments28['size'] = 'small';
$arguments28['overlay'] = NULL;
$arguments28['state'] = 'default';
$arguments28['alternativeMarkupIdentifier'] = NULL;
$arguments28['identifier'] = 'actions-system-extension-configure';

$output26 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['key'] = NULL;
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['htmlEscape'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['key'] = 'extensionList.configure';

$output26 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext), ENT_QUOTES);

$output26 .= '
								</a>
							</li>
						';
return $output26;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('configurationLink', $array24);

$expression25 = function($context) {return ($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = $renderChildrenClosure22;

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
						<li>
							<button class="btn btn-default distribution-openViewModule" onclick="top.goToModule(\'web_ViewpageView\');">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['identifier'] = NULL;
$arguments32['size'] = 'small';
$arguments32['overlay'] = NULL;
$arguments32['state'] = 'default';
$arguments32['alternativeMarkupIdentifier'] = NULL;
$arguments32['identifier'] = 'actions-document-view';

$output20 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['key'] = NULL;
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['htmlEscape'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['key'] = 'distribution.welcome.openViewModule';

$output20 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext), ENT_QUOTES);

$output20 .= '
							</button>
						</li>
						<li>
							<button class="btn btn-default distribution-openPageModule" onclick="top.goToModule(\'web_page\');">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['key'] = NULL;
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['htmlEscape'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['key'] = 'distribution.welcome.openPageModule';

$output20 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext), ENT_QUOTES);

$output20 .= '
							</button>
						</li>
					';
return $output20;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
			</ul>
			<dl class="dl-horizontal dl-horizontal-wide distribution-detail-summary">
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['key'] = NULL;
$arguments74['id'] = NULL;
$arguments74['default'] = NULL;
$arguments74['htmlEscape'] = NULL;
$arguments74['arguments'] = NULL;
$arguments74['extensionName'] = NULL;
$arguments74['key'] = 'extensionList.distribution.title';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext), ENT_QUOTES);

$output0 .= '</dt>
				<dd>';
$array76 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.title', $array76), ENT_QUOTES);

$output0 .= '</dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['key'] = NULL;
$arguments77['id'] = NULL;
$arguments77['default'] = NULL;
$arguments77['htmlEscape'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['extensionName'] = NULL;
$arguments77['key'] = 'extensionList.distribution.key';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext), ENT_QUOTES);

$output0 .= '</dt>
				<dd>';
$array79 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array79), ENT_QUOTES);

$output0 .= '</dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['key'] = NULL;
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['htmlEscape'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$arguments80['key'] = 'extensionList.distribution.version';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext), ENT_QUOTES);

$output0 .= '</dt>
				<dd>';
$array82 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.version', $array82), ENT_QUOTES);

$output0 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$array85 = array (
);return $renderingContext->getVariableProvider()->getByPath('extension.lastUpdated', $array85);
};
$arguments83 = array();
$arguments83['date'] = NULL;
$arguments83['format'] = '';
$arguments83['base'] = NULL;
$arguments83['format'] = 'd.m.Y';
$renderChildrenClosure84 = $arguments83['date'] ? function() use ($arguments83) { return $arguments83['date']; } : $renderChildrenClosure84;
$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext), ENT_QUOTES);

$output0 .= ')<br><span class="';
$array86 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.stateString', $array86), ENT_QUOTES);

$output0 .= '">';
$array87 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.stateString', $array87), ENT_QUOTES);

$output0 .= '</span></dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['key'] = NULL;
$arguments88['id'] = NULL;
$arguments88['default'] = NULL;
$arguments88['htmlEscape'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['extensionName'] = NULL;
$arguments88['key'] = 'extensionList.distribution.author';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext), ENT_QUOTES);

$output0 .= '</dt>
				<dd>';
$array90 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.authorName', $array90), ENT_QUOTES);

$output0 .= '</dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['key'] = NULL;
$arguments91['id'] = NULL;
$arguments91['default'] = NULL;
$arguments91['htmlEscape'] = NULL;
$arguments91['arguments'] = NULL;
$arguments91['extensionName'] = NULL;
$arguments91['key'] = 'extensionList.distribution.downloads';

$output0 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext), ENT_QUOTES);

$output0 .= '</dt>
				<dd>';
$array93 = array (
);
$output0 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.alldownloadcounter', $array93), ENT_QUOTES);

$output0 .= '</dd>
			</dl>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
				<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['key'] = NULL;
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['htmlEscape'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['extensionName'] = NULL;
$arguments100['key'] = 'distribution.dependency.headline';

$output99 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext), ENT_QUOTES);

$output99 .= '</h2>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['key'] = NULL;
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['htmlEscape'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$arguments102['key'] = 'distribution.dependency.identifier';

$output99 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext), ENT_QUOTES);

$output99 .= '</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['key'] = NULL;
$arguments104['id'] = NULL;
$arguments104['default'] = NULL;
$arguments104['htmlEscape'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['extensionName'] = NULL;
$arguments104['key'] = 'distribution.dependency.type';

$output99 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext), ENT_QUOTES);

$output99 .= '</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['key'] = NULL;
$arguments106['id'] = NULL;
$arguments106['default'] = NULL;
$arguments106['htmlEscape'] = NULL;
$arguments106['arguments'] = NULL;
$arguments106['extensionName'] = NULL;
$arguments106['key'] = 'distribution.dependency.version';

$output99 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext), ENT_QUOTES);

$output99 .= '</td>
						</tr>
					</thead>
					<tbody>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
							<tr>
								<td>';
$array112 = array (
);
$output111 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('dependency.identifier', $array112), ENT_QUOTES);

$output111 .= '</td>
								<td>';
$array113 = array (
);
$output111 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('dependency.type', $array113), ENT_QUOTES);

$output111 .= '</td>
								<td>
									';
$array114 = array (
);
$output111 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('dependency.lowestVersion', $array114), ENT_QUOTES);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '-';
$array121 = array (
);
$output120 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('dependency.highestVersion', $array121), ENT_QUOTES);
return $output120;
};
$arguments115 = array();
$arguments115['then'] = NULL;
$arguments115['else'] = NULL;
$arguments115['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['0'] = $renderingContext->getVariableProvider()->getByPath('dependency.highestVersion', $array118);

$expression119 = function($context) {return ($context["node0"]);};
$arguments115['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);
$arguments115['__thenClosure'] = $renderChildrenClosure116;

$output111 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output111 .= '
								</td>
							</tr>
						';
return $output111;
};
$arguments108 = array();
$arguments108['each'] = NULL;
$arguments108['as'] = NULL;
$arguments108['key'] = NULL;
$arguments108['reverse'] = false;
$arguments108['iteration'] = NULL;
$array110 = array (
);$arguments108['each'] = $renderingContext->getVariableProvider()->getByPath('extension.dependencies', $array110);
$arguments108['as'] = 'dependency';

$output99 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output99 .= '
					</tbody>
				</table>
			';
return $output99;
};
$arguments94 = array();
$arguments94['then'] = NULL;
$arguments94['else'] = NULL;
$arguments94['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array96 = array();
$array97 = array (
);$array96['0'] = $renderingContext->getVariableProvider()->getByPath('extension.dependencies', $array97);

$expression98 = function($context) {return ($context["node0"]);};
$arguments94['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array96)
					),
					$renderingContext
				);
$arguments94['__thenClosure'] = $renderChildrenClosure95;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output0 .= '
		</div>
	</div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output122 = '';

$output122 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['name'] = NULL;
$arguments123['name'] = 'main';

$output122 .= htmlspecialchars(TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext), ENT_QUOTES);

$output122 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return '
';
};
$arguments125 = array();
$arguments125['name'] = NULL;
$arguments125['name'] = 'headline';

$output122 .= '';

$output122 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
	<div class="distribution-detail">
		<div class="distribution-detail-previewpane">
			';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['src'] = NULL;
$arguments130['width'] = NULL;
$arguments130['height'] = NULL;
$arguments130['fallbackImage'] = '';
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['alt'] = NULL;
$output132 = '';

$output132 .= 'EXT:';
$array133 = array (
);
$output132 .= $renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array133);

$output132 .= '/Resources/Public/Images/DistributionWelcome.png';
$arguments130['src'] = $output132;
$arguments130['fallbackImage'] = 'EXT:extensionmanager/Resources/Public/Images/Distribution.png';
$array134 = array (
);$arguments130['alt'] = $renderingContext->getVariableProvider()->getByPath('distribution.title', $array134);
$arguments130['class'] = 'distribution-detail-preview';
$arguments130['width'] = 300;

$output129 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
		</div>
		<div class="distribution-detail-body">
			<div class="distribution-detail-header">
				<h1>';
$array135 = array (
);
$output129 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.title', $array135), ENT_QUOTES);

$output129 .= '</h1>
				<p>';
$array136 = array (
);
$output129 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.description', $array136), ENT_QUOTES);

$output129 .= '</p>
			</div>
			<ul class="list-unstyled">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['identifier'] = NULL;
$arguments179['size'] = 'small';
$arguments179['overlay'] = NULL;
$arguments179['state'] = 'default';
$arguments179['alternativeMarkupIdentifier'] = NULL;
$arguments179['identifier'] = 'actions-system-extension-import';

$output178 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return 'Install';
};
$arguments181 = array();
$arguments181['key'] = NULL;
$arguments181['id'] = NULL;
$arguments181['default'] = NULL;
$arguments181['htmlEscape'] = NULL;
$arguments181['arguments'] = NULL;
$arguments181['extensionName'] = NULL;
$arguments181['key'] = 'extensionList.installDistribution';

$output178 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext), ENT_QUOTES);

$output178 .= '
							';
return $output178;
};
$arguments174 = array();
$arguments174['action'] = NULL;
$arguments174['arguments'] = array (
);
$arguments174['controller'] = NULL;
$arguments174['extensionName'] = NULL;
$arguments174['pluginName'] = NULL;
$arguments174['pageUid'] = NULL;
$arguments174['pageType'] = 0;
$arguments174['noCache'] = false;
$arguments174['noCacheHash'] = false;
$arguments174['section'] = '';
$arguments174['format'] = '';
$arguments174['linkAccessRestrictedPages'] = false;
$arguments174['additionalParams'] = array (
);
$arguments174['absolute'] = false;
$arguments174['addQueryString'] = false;
$arguments174['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments174['addQueryStringMethod'] = NULL;
$arguments174['additionalAttributes'] = NULL;
$arguments174['data'] = NULL;
$arguments174['class'] = NULL;
$arguments174['dir'] = NULL;
$arguments174['id'] = NULL;
$arguments174['lang'] = NULL;
$arguments174['style'] = NULL;
$arguments174['title'] = NULL;
$arguments174['accesskey'] = NULL;
$arguments174['tabindex'] = NULL;
$arguments174['onclick'] = NULL;
$arguments174['name'] = NULL;
$arguments174['rel'] = NULL;
$arguments174['rev'] = NULL;
$arguments174['target'] = NULL;
$arguments174['action'] = 'installDistribution';
$arguments174['controller'] = 'Download';
// Rendering Array
$array176 = array();
$array177 = array (
);$array176['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array177);
$arguments174['arguments'] = $array176;
$arguments174['class'] = 'btn btn-default t3-button-action-installdistribution';

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output173 .= '
						</li>
					';
return $output173;
};
$arguments171 = array();
$arguments171['if'] = NULL;

$output170 .= '';

$output170 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
							<li>
								<a href="';
$array192 = array (
);
$output191 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('configurationLink', $array192), ENT_QUOTES);

$output191 .= '" class="btn btn-default distribution-openViewModule " onclick="top.goToModule(\'web_ViewpageView\');">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['identifier'] = NULL;
$arguments193['size'] = 'small';
$arguments193['overlay'] = NULL;
$arguments193['state'] = 'default';
$arguments193['alternativeMarkupIdentifier'] = NULL;
$arguments193['identifier'] = 'actions-system-extension-configure';

$output191 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['key'] = NULL;
$arguments195['id'] = NULL;
$arguments195['default'] = NULL;
$arguments195['htmlEscape'] = NULL;
$arguments195['arguments'] = NULL;
$arguments195['extensionName'] = NULL;
$arguments195['key'] = 'extensionList.configure';

$output191 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext), ENT_QUOTES);

$output191 .= '
								</a>
							</li>
						';
return $output191;
};
$arguments186 = array();
$arguments186['then'] = NULL;
$arguments186['else'] = NULL;
$arguments186['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array188 = array();
$array189 = array (
);$array188['0'] = $renderingContext->getVariableProvider()->getByPath('configurationLink', $array189);

$expression190 = function($context) {return ($context["node0"]);};
$arguments186['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression190(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array188)
					),
					$renderingContext
				);
$arguments186['__thenClosure'] = $renderChildrenClosure187;

$output185 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '
						<li>
							<button class="btn btn-default distribution-openViewModule" onclick="top.goToModule(\'web_ViewpageView\');">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['identifier'] = NULL;
$arguments197['size'] = 'small';
$arguments197['overlay'] = NULL;
$arguments197['state'] = 'default';
$arguments197['alternativeMarkupIdentifier'] = NULL;
$arguments197['identifier'] = 'actions-document-view';

$output185 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['key'] = NULL;
$arguments199['id'] = NULL;
$arguments199['default'] = NULL;
$arguments199['htmlEscape'] = NULL;
$arguments199['arguments'] = NULL;
$arguments199['extensionName'] = NULL;
$arguments199['key'] = 'distribution.welcome.openViewModule';

$output185 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext), ENT_QUOTES);

$output185 .= '
							</button>
						</li>
						<li>
							<button class="btn btn-default distribution-openPageModule" onclick="top.goToModule(\'web_page\');">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['key'] = NULL;
$arguments201['id'] = NULL;
$arguments201['default'] = NULL;
$arguments201['htmlEscape'] = NULL;
$arguments201['arguments'] = NULL;
$arguments201['extensionName'] = NULL;
$arguments201['key'] = 'distribution.welcome.openPageModule';

$output185 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext), ENT_QUOTES);

$output185 .= '
							</button>
						</li>
					';
return $output185;
};
$arguments183 = array();

$output170 .= '';

$output170 .= '
				';
return $output170;
};
$arguments137 = array();
$arguments137['then'] = NULL;
$arguments137['else'] = NULL;
$arguments137['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array167 = array();
$array168 = array (
);$array167['0'] = $renderingContext->getVariableProvider()->getByPath('distributionActive', $array168);

$expression169 = function($context) {return ($context["node0"]);};
$arguments137['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression169(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array167)
					),
					$renderingContext
				);
$arguments137['__elseClosures'][] = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
						<li>
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['identifier'] = NULL;
$arguments145['size'] = 'small';
$arguments145['overlay'] = NULL;
$arguments145['state'] = 'default';
$arguments145['alternativeMarkupIdentifier'] = NULL;
$arguments145['identifier'] = 'actions-system-extension-import';

$output144 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return 'Install';
};
$arguments147 = array();
$arguments147['key'] = NULL;
$arguments147['id'] = NULL;
$arguments147['default'] = NULL;
$arguments147['htmlEscape'] = NULL;
$arguments147['arguments'] = NULL;
$arguments147['extensionName'] = NULL;
$arguments147['key'] = 'extensionList.installDistribution';

$output144 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext), ENT_QUOTES);

$output144 .= '
							';
return $output144;
};
$arguments140 = array();
$arguments140['action'] = NULL;
$arguments140['arguments'] = array (
);
$arguments140['controller'] = NULL;
$arguments140['extensionName'] = NULL;
$arguments140['pluginName'] = NULL;
$arguments140['pageUid'] = NULL;
$arguments140['pageType'] = 0;
$arguments140['noCache'] = false;
$arguments140['noCacheHash'] = false;
$arguments140['section'] = '';
$arguments140['format'] = '';
$arguments140['linkAccessRestrictedPages'] = false;
$arguments140['additionalParams'] = array (
);
$arguments140['absolute'] = false;
$arguments140['addQueryString'] = false;
$arguments140['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments140['addQueryStringMethod'] = NULL;
$arguments140['additionalAttributes'] = NULL;
$arguments140['data'] = NULL;
$arguments140['class'] = NULL;
$arguments140['dir'] = NULL;
$arguments140['id'] = NULL;
$arguments140['lang'] = NULL;
$arguments140['style'] = NULL;
$arguments140['title'] = NULL;
$arguments140['accesskey'] = NULL;
$arguments140['tabindex'] = NULL;
$arguments140['onclick'] = NULL;
$arguments140['name'] = NULL;
$arguments140['rel'] = NULL;
$arguments140['rev'] = NULL;
$arguments140['target'] = NULL;
$arguments140['action'] = 'installDistribution';
$arguments140['controller'] = 'Download';
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array143);
$arguments140['arguments'] = $array142;
$arguments140['class'] = 'btn btn-default t3-button-action-installdistribution';

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
						</li>
					';
return $output139;
};
$arguments137['__thenClosure'] = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
							<li>
								<a href="';
$array156 = array (
);
$output155 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('configurationLink', $array156), ENT_QUOTES);

$output155 .= '" class="btn btn-default distribution-openViewModule " onclick="top.goToModule(\'web_ViewpageView\');">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['identifier'] = NULL;
$arguments157['size'] = 'small';
$arguments157['overlay'] = NULL;
$arguments157['state'] = 'default';
$arguments157['alternativeMarkupIdentifier'] = NULL;
$arguments157['identifier'] = 'actions-system-extension-configure';

$output155 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['key'] = NULL;
$arguments159['id'] = NULL;
$arguments159['default'] = NULL;
$arguments159['htmlEscape'] = NULL;
$arguments159['arguments'] = NULL;
$arguments159['extensionName'] = NULL;
$arguments159['key'] = 'extensionList.configure';

$output155 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext), ENT_QUOTES);

$output155 .= '
								</a>
							</li>
						';
return $output155;
};
$arguments150 = array();
$arguments150['then'] = NULL;
$arguments150['else'] = NULL;
$arguments150['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array152 = array();
$array153 = array (
);$array152['0'] = $renderingContext->getVariableProvider()->getByPath('configurationLink', $array153);

$expression154 = function($context) {return ($context["node0"]);};
$arguments150['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array152)
					),
					$renderingContext
				);
$arguments150['__thenClosure'] = $renderChildrenClosure151;

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
						<li>
							<button class="btn btn-default distribution-openViewModule" onclick="top.goToModule(\'web_ViewpageView\');">
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['identifier'] = NULL;
$arguments161['size'] = 'small';
$arguments161['overlay'] = NULL;
$arguments161['state'] = 'default';
$arguments161['alternativeMarkupIdentifier'] = NULL;
$arguments161['identifier'] = 'actions-document-view';

$output149 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['key'] = NULL;
$arguments163['id'] = NULL;
$arguments163['default'] = NULL;
$arguments163['htmlEscape'] = NULL;
$arguments163['arguments'] = NULL;
$arguments163['extensionName'] = NULL;
$arguments163['key'] = 'distribution.welcome.openViewModule';

$output149 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext), ENT_QUOTES);

$output149 .= '
							</button>
						</li>
						<li>
							<button class="btn btn-default distribution-openPageModule" onclick="top.goToModule(\'web_page\');">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['key'] = NULL;
$arguments165['id'] = NULL;
$arguments165['default'] = NULL;
$arguments165['htmlEscape'] = NULL;
$arguments165['arguments'] = NULL;
$arguments165['extensionName'] = NULL;
$arguments165['key'] = 'distribution.welcome.openPageModule';

$output149 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext), ENT_QUOTES);

$output149 .= '
							</button>
						</li>
					';
return $output149;
};

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output129 .= '
			</ul>
			<dl class="dl-horizontal dl-horizontal-wide distribution-detail-summary">
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['key'] = NULL;
$arguments203['id'] = NULL;
$arguments203['default'] = NULL;
$arguments203['htmlEscape'] = NULL;
$arguments203['arguments'] = NULL;
$arguments203['extensionName'] = NULL;
$arguments203['key'] = 'extensionList.distribution.title';

$output129 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext), ENT_QUOTES);

$output129 .= '</dt>
				<dd>';
$array205 = array (
);
$output129 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.title', $array205), ENT_QUOTES);

$output129 .= '</dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['key'] = NULL;
$arguments206['id'] = NULL;
$arguments206['default'] = NULL;
$arguments206['htmlEscape'] = NULL;
$arguments206['arguments'] = NULL;
$arguments206['extensionName'] = NULL;
$arguments206['key'] = 'extensionList.distribution.key';

$output129 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext), ENT_QUOTES);

$output129 .= '</dt>
				<dd>';
$array208 = array (
);
$output129 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.extensionKey', $array208), ENT_QUOTES);

$output129 .= '</dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['key'] = NULL;
$arguments209['id'] = NULL;
$arguments209['default'] = NULL;
$arguments209['htmlEscape'] = NULL;
$arguments209['arguments'] = NULL;
$arguments209['extensionName'] = NULL;
$arguments209['key'] = 'extensionList.distribution.version';

$output129 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext), ENT_QUOTES);

$output129 .= '</dt>
				<dd>';
$array211 = array (
);
$output129 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.version', $array211), ENT_QUOTES);

$output129 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$array214 = array (
);return $renderingContext->getVariableProvider()->getByPath('extension.lastUpdated', $array214);
};
$arguments212 = array();
$arguments212['date'] = NULL;
$arguments212['format'] = '';
$arguments212['base'] = NULL;
$arguments212['format'] = 'd.m.Y';
$renderChildrenClosure213 = $arguments212['date'] ? function() use ($arguments212) { return $arguments212['date']; } : $renderChildrenClosure213;
$output129 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext), ENT_QUOTES);

$output129 .= ')<br><span class="';
$array215 = array (
);
$output129 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.stateString', $array215), ENT_QUOTES);

$output129 .= '">';
$array216 = array (
);
$output129 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.stateString', $array216), ENT_QUOTES);

$output129 .= '</span></dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['key'] = NULL;
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['htmlEscape'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['key'] = 'extensionList.distribution.author';

$output129 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext), ENT_QUOTES);

$output129 .= '</dt>
				<dd>';
$array219 = array (
);
$output129 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.authorName', $array219), ENT_QUOTES);

$output129 .= '</dd>
				<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['key'] = NULL;
$arguments220['id'] = NULL;
$arguments220['default'] = NULL;
$arguments220['htmlEscape'] = NULL;
$arguments220['arguments'] = NULL;
$arguments220['extensionName'] = NULL;
$arguments220['key'] = 'extensionList.distribution.downloads';

$output129 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext), ENT_QUOTES);

$output129 .= '</dt>
				<dd>';
$array222 = array (
);
$output129 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('extension.alldownloadcounter', $array222), ENT_QUOTES);

$output129 .= '</dd>
			</dl>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
				<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['key'] = NULL;
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['htmlEscape'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$arguments229['key'] = 'distribution.dependency.headline';

$output228 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext), ENT_QUOTES);

$output228 .= '</h2>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['key'] = NULL;
$arguments231['id'] = NULL;
$arguments231['default'] = NULL;
$arguments231['htmlEscape'] = NULL;
$arguments231['arguments'] = NULL;
$arguments231['extensionName'] = NULL;
$arguments231['key'] = 'distribution.dependency.identifier';

$output228 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext), ENT_QUOTES);

$output228 .= '</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['key'] = NULL;
$arguments233['id'] = NULL;
$arguments233['default'] = NULL;
$arguments233['htmlEscape'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$arguments233['key'] = 'distribution.dependency.type';

$output228 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext), ENT_QUOTES);

$output228 .= '</td>
							<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['key'] = NULL;
$arguments235['id'] = NULL;
$arguments235['default'] = NULL;
$arguments235['htmlEscape'] = NULL;
$arguments235['arguments'] = NULL;
$arguments235['extensionName'] = NULL;
$arguments235['key'] = 'distribution.dependency.version';

$output228 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext), ENT_QUOTES);

$output228 .= '</td>
						</tr>
					</thead>
					<tbody>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
							<tr>
								<td>';
$array241 = array (
);
$output240 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('dependency.identifier', $array241), ENT_QUOTES);

$output240 .= '</td>
								<td>';
$array242 = array (
);
$output240 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('dependency.type', $array242), ENT_QUOTES);

$output240 .= '</td>
								<td>
									';
$array243 = array (
);
$output240 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('dependency.lowestVersion', $array243), ENT_QUOTES);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '-';
$array250 = array (
);
$output249 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('dependency.highestVersion', $array250), ENT_QUOTES);
return $output249;
};
$arguments244 = array();
$arguments244['then'] = NULL;
$arguments244['else'] = NULL;
$arguments244['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array246 = array();
$array247 = array (
);$array246['0'] = $renderingContext->getVariableProvider()->getByPath('dependency.highestVersion', $array247);

$expression248 = function($context) {return ($context["node0"]);};
$arguments244['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression248(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array246)
					),
					$renderingContext
				);
$arguments244['__thenClosure'] = $renderChildrenClosure245;

$output240 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output240 .= '
								</td>
							</tr>
						';
return $output240;
};
$arguments237 = array();
$arguments237['each'] = NULL;
$arguments237['as'] = NULL;
$arguments237['key'] = NULL;
$arguments237['reverse'] = false;
$arguments237['iteration'] = NULL;
$array239 = array (
);$arguments237['each'] = $renderingContext->getVariableProvider()->getByPath('extension.dependencies', $array239);
$arguments237['as'] = 'dependency';

$output228 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output228 .= '
					</tbody>
				</table>
			';
return $output228;
};
$arguments223 = array();
$arguments223['then'] = NULL;
$arguments223['else'] = NULL;
$arguments223['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array225 = array();
$array226 = array (
);$array225['0'] = $renderingContext->getVariableProvider()->getByPath('extension.dependencies', $array226);

$expression227 = function($context) {return ($context["node0"]);};
$arguments223['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression227(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array225)
					),
					$renderingContext
				);
$arguments223['__thenClosure'] = $renderChildrenClosure224;

$output129 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output129 .= '
		</div>
	</div>
';
return $output129;
};
$arguments127 = array();
$arguments127['name'] = NULL;
$arguments127['name'] = 'content';

$output122 .= '';

$output122 .= '
';

return $output122;
}


}
#