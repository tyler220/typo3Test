<?php

class partial_Media_Rendering_Image_539b623b33feaa39201556b34032a7653164f613 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'ce' => 
  array (
    0 => 'TYPO3\\CMS\\FluidStyledContent\\ViewHelpers',
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '

    <picture>
        <source
            srcset="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['src'] = NULL;
$arguments23['treatIdAsReference'] = false;
$arguments23['image'] = NULL;
$arguments23['crop'] = NULL;
$arguments23['cropVariant'] = 'default';
$arguments23['width'] = NULL;
$arguments23['height'] = NULL;
$arguments23['minWidth'] = NULL;
$arguments23['minHeight'] = NULL;
$arguments23['maxWidth'] = NULL;
$arguments23['maxHeight'] = NULL;
$arguments23['absolute'] = false;
$array25 = array (
);$arguments23['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array25);
$arguments23['cropVariant'] = 'default';

$output22 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext), ENT_QUOTES);

$output22 .= '"
            media="(min-width: 1200px)"
        >
        <source
            srcset="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['src'] = NULL;
$arguments26['treatIdAsReference'] = false;
$arguments26['image'] = NULL;
$arguments26['crop'] = NULL;
$arguments26['cropVariant'] = 'default';
$arguments26['width'] = NULL;
$arguments26['height'] = NULL;
$arguments26['minWidth'] = NULL;
$arguments26['minHeight'] = NULL;
$arguments26['maxWidth'] = NULL;
$arguments26['maxHeight'] = NULL;
$arguments26['absolute'] = false;
$array28 = array (
);$arguments26['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array28);
$arguments26['maxWidth'] = 992;
$arguments26['cropVariant'] = 'default';

$output22 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext), ENT_QUOTES);

$output22 .= ', ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['src'] = NULL;
$arguments29['treatIdAsReference'] = false;
$arguments29['image'] = NULL;
$arguments29['crop'] = NULL;
$arguments29['cropVariant'] = 'default';
$arguments29['width'] = NULL;
$arguments29['height'] = NULL;
$arguments29['minWidth'] = NULL;
$arguments29['minHeight'] = NULL;
$arguments29['maxWidth'] = NULL;
$arguments29['maxHeight'] = NULL;
$arguments29['absolute'] = false;
$array31 = array (
);$arguments29['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array31);
$arguments29['maxWidth'] = 1984;
$arguments29['cropVariant'] = 'default';

$output22 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext), ENT_QUOTES);

$output22 .= ' 2x"
            media="(min-width: 992px)"
        >
        <source
            srcset="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['src'] = NULL;
$arguments32['treatIdAsReference'] = false;
$arguments32['image'] = NULL;
$arguments32['crop'] = NULL;
$arguments32['cropVariant'] = 'default';
$arguments32['width'] = NULL;
$arguments32['height'] = NULL;
$arguments32['minWidth'] = NULL;
$arguments32['minHeight'] = NULL;
$arguments32['maxWidth'] = NULL;
$arguments32['maxHeight'] = NULL;
$arguments32['absolute'] = false;
$array34 = array (
);$arguments32['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array34);
$arguments32['maxWidth'] = 768;
$arguments32['cropVariant'] = 'tablet';

$output22 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext), ENT_QUOTES);

$output22 .= ', ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['src'] = NULL;
$arguments35['treatIdAsReference'] = false;
$arguments35['image'] = NULL;
$arguments35['crop'] = NULL;
$arguments35['cropVariant'] = 'default';
$arguments35['width'] = NULL;
$arguments35['height'] = NULL;
$arguments35['minWidth'] = NULL;
$arguments35['minHeight'] = NULL;
$arguments35['maxWidth'] = NULL;
$arguments35['maxHeight'] = NULL;
$arguments35['absolute'] = false;
$array37 = array (
);$arguments35['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array37);
$arguments35['maxWidth'] = 1536;
$arguments35['cropVariant'] = 'tablet';

$output22 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext), ENT_QUOTES);

$output22 .= ' 2x"
            media="(min-width: 768px)"
        >
        <source
            srcset="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['src'] = NULL;
$arguments38['treatIdAsReference'] = false;
$arguments38['image'] = NULL;
$arguments38['crop'] = NULL;
$arguments38['cropVariant'] = 'default';
$arguments38['width'] = NULL;
$arguments38['height'] = NULL;
$arguments38['minWidth'] = NULL;
$arguments38['minHeight'] = NULL;
$arguments38['maxWidth'] = NULL;
$arguments38['maxHeight'] = NULL;
$arguments38['absolute'] = false;
$array40 = array (
);$arguments38['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array40);
$arguments38['maxWidth'] = 768;
$arguments38['cropVariant'] = 'mobile';

$output22 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext), ENT_QUOTES);

$output22 .= ', ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['src'] = NULL;
$arguments41['treatIdAsReference'] = false;
$arguments41['image'] = NULL;
$arguments41['crop'] = NULL;
$arguments41['cropVariant'] = 'default';
$arguments41['width'] = NULL;
$arguments41['height'] = NULL;
$arguments41['minWidth'] = NULL;
$arguments41['minHeight'] = NULL;
$arguments41['maxWidth'] = NULL;
$arguments41['maxHeight'] = NULL;
$arguments41['absolute'] = false;
$array43 = array (
);$arguments41['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array43);
$arguments41['maxWidth'] = 1536;
$arguments41['cropVariant'] = 'mobile';

$output22 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext), ENT_QUOTES);

$output22 .= ' 2x"
            media="(max-width: 767px)"
        >

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
            @TODO
            v7.6 Threeme cropping feature:
            Is this useful anymore? Or is the new cropping feature of v8.7 the better one?

            width="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = $renderingContext->getVariableProvider()->getByPath('data.imagewidth', $array50);
$array49['1'] = ' > 0';

$expression51 = function($context) {return (($context["node0"]) > 0);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$array52 = array (
);$arguments47['then'] = $renderingContext->getVariableProvider()->getByPath('cropMediaWidth', $array52);
$array53 = array (
);$arguments47['else'] = $renderingContext->getVariableProvider()->getByPath('dimensions.width', $array53);

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '"
            height="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$arguments54['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array56 = array();
$array57 = array (
);$array56['0'] = $renderingContext->getVariableProvider()->getByPath('data.imageheight', $array57);
$array56['1'] = ' > 0';

$expression58 = function($context) {return (($context["node0"]) > 0);};
$arguments54['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)
					),
					$renderingContext
				);
$array59 = array (
);$arguments54['then'] = $renderingContext->getVariableProvider()->getByPath('cropMediaHeight', $array59);
$array60 = array (
);$arguments54['else'] = $renderingContext->getVariableProvider()->getByPath('dimensions.height', $array60);

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output46 .= '"
        ';
return $output46;
};
$arguments44 = array();

$output22 .= NULL;

$output22 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['alt'] = NULL;
$arguments61['file'] = NULL;
$arguments61['additionalConfig'] = array (
);
$arguments61['width'] = NULL;
$arguments61['height'] = NULL;
$arguments61['cropVariant'] = 'default';
$array63 = array (
);$arguments61['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array63);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$arguments64['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array66 = array();
$array67 = array (
);$array66['0'] = $renderingContext->getVariableProvider()->getByPath('data.imagewidth', $array67);
$array66['1'] = ' > 0';

$expression68 = function($context) {return (($context["node0"]) > 0);};
$arguments64['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression68(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);
$array69 = array (
);$arguments64['then'] = $renderingContext->getVariableProvider()->getByPath('cropMediaWidth', $array69);
$array70 = array (
);$arguments64['else'] = $renderingContext->getVariableProvider()->getByPath('dimensions.width', $array70);
$arguments61['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['then'] = NULL;
$arguments71['else'] = NULL;
$arguments71['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['0'] = $renderingContext->getVariableProvider()->getByPath('data.imageheight', $array74);
$array73['1'] = ' > 0';

$expression75 = function($context) {return (($context["node0"]) > 0);};
$arguments71['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$array76 = array (
);$arguments71['then'] = $renderingContext->getVariableProvider()->getByPath('cropMediaHeight', $array76);
$array77 = array (
);$arguments71['else'] = $renderingContext->getVariableProvider()->getByPath('dimensions.height', $array77);
$arguments61['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);
$array78 = array (
);$arguments61['alt'] = $renderingContext->getVariableProvider()->getByPath('file.alternative', $array78);
$array79 = array (
);$arguments61['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array79);
$output80 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$arguments81['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['0'] = $renderingContext->getVariableProvider()->getByPath('data.imagewidth', $array84);
$array83['1'] = ' == 0';

$expression85 = function($context) {return (($context["node0"]) == 0);};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);
$arguments81['then'] = 'img-responsive';

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$arguments86['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['0'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array89);

$expression90 = function($context) {return ($context["node0"]);};
$arguments86['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression90(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)
					),
					$renderingContext
				);
$output91 = '';

$output91 .= ' threeme-image-layout-';
$array92 = array (
);
$output91 .= $renderingContext->getVariableProvider()->getByPath('data.layout', $array92);
$arguments86['then'] = $output91;

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);
$arguments61['class'] = $output80;
$arguments61['cropVariant'] = 'default';

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output22 .= '
    </picture>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
        @NOTICE
        Watermarked images:
        Alternative implementation for watermarked image rendering.
        Note: EXT \'filemetadata\' has to be activated if you want to use additional media fields.

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['typoscriptObjectPath'] = NULL;
$arguments96['data'] = NULL;
$arguments96['currentValueKey'] = NULL;
$arguments96['table'] = '';
$arguments96['typoscriptObjectPath'] = 'lib.threemeWatermarkedImage';
$arguments96['currentValueKey'] = 'uid';
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['uid'] = $renderingContext->getVariableProvider()->getByPath('file.uid', $array99);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$arguments100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('data.imagewidth', $array103);
$array102['1'] = ' > 0';

$expression104 = function($context) {return (($context["node0"]) > 0);};
$arguments100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$array105 = array (
);$arguments100['then'] = $renderingContext->getVariableProvider()->getByPath('cropMediaWidth', $array105);
$array106 = array (
);$arguments100['else'] = $renderingContext->getVariableProvider()->getByPath('dimensions.width', $array106);
$array98['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$arguments107['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('data.imageheight', $array110);
$array109['1'] = ' > 0';

$expression111 = function($context) {return (($context["node0"]) > 0);};
$arguments107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$array112 = array (
);$arguments107['then'] = $renderingContext->getVariableProvider()->getByPath('cropMediaHeight', $array112);
$array113 = array (
);$arguments107['else'] = $renderingContext->getVariableProvider()->getByPath('dimensions.height', $array113);
$array98['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);
$array114 = array (
);$array98['alt'] = $renderingContext->getVariableProvider()->getByPath('file.alternative', $array114);
$array115 = array (
);$array98['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array115);
$output116 = '';

$output116 .= 'class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['then'] = NULL;
$arguments117['else'] = NULL;
$arguments117['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['0'] = $renderingContext->getVariableProvider()->getByPath('data.layout', $array120);

$expression121 = function($context) {return ($context["node0"]);};
$arguments117['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$output122 = '';

$output122 .= 'threeme-image-layout-';
$array123 = array (
);
$output122 .= $renderingContext->getVariableProvider()->getByPath('data.layout', $array123);
$arguments117['then'] = $output122;
$arguments117['else'] = 'img-responsive';

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '"';
$array98['params'] = $output116;
$array124 = array (
);$array98['watermark'] = $renderingContext->getVariableProvider()->getByPath('column.media.properties.copyright', $array124);
$arguments96['data'] = $array98;

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
    ';
return $output95;
};
$arguments93 = array();

$output22 .= NULL;

$output22 .= '
';
return $output22;
};
$arguments1 = array();
$arguments1['map'] = NULL;
// Rendering Array
$array3 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['0'] = $renderingContext->getVariableProvider()->getByPath('data.imagewidth', $array7);
$array6['1'] = ' == ';
$array8 = array (
);$array6['2'] = $renderingContext->getVariableProvider()->getByPath('data.imageheight', $array8);

$expression9 = function($context) {return (($context["node0"]) == ($context["node2"]));};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)
					),
					$renderingContext
				);
$output10 = '';
$array11 = array (
);
$output10 .= $renderingContext->getVariableProvider()->getByPath('data.imagewidth', $array11);

$output10 .= 'c';
$arguments4['then'] = $output10;
$array12 = array (
);$arguments4['else'] = $renderingContext->getVariableProvider()->getByPath('dimensions.width', $array12);
$array3['cropMediaWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('data.imagewidth', $array16);
$array15['1'] = ' == ';
$array17 = array (
);$array15['2'] = $renderingContext->getVariableProvider()->getByPath('data.imageheight', $array17);

$expression18 = function($context) {return (($context["node0"]) == ($context["node2"]));};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$output19 = '';
$array20 = array (
);
$output19 .= $renderingContext->getVariableProvider()->getByPath('data.imageheight', $array20);

$output19 .= 'c';
$arguments13['then'] = $output19;
$array21 = array (
);$arguments13['else'] = $renderingContext->getVariableProvider()->getByPath('dimensions.height', $array21);
$array3['cropMediaHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);
$arguments1['map'] = $array3;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#