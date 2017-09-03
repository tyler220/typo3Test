<?php

class partial_Media_Type_Image_61a07712a3be075bd98bfb51f9c044e67410b248 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

<figure class="image">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return '
                @TODO: Integrate lib.parseFunc for typolink to make use of FancyBox feature - or better write a view helper?
            ';
};
$arguments132 = array();

$output131 .= NULL;

$output131 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['section'] = NULL;
$arguments139['partial'] = NULL;
$arguments139['delegate'] = NULL;
$arguments139['arguments'] = array (
);
$arguments139['optional'] = false;
$arguments139['default'] = NULL;
$arguments139['contentAs'] = NULL;
$arguments139['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array142);
$array143 = array (
);$array141['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array143);
$array144 = array (
);$array141['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array144);
$array145 = array (
);$array141['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array145);
$arguments139['arguments'] = $array141;

$output138 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '<i class="threeme-ui-enlarge fa fa-external-link" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['key'] = NULL;
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['htmlEscape'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$arguments146['key'] = 'image.clicklink.title';
$arguments146['extensionName'] = 'threeme';

$output138 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext), ENT_QUOTES);

$output138 .= '"></i>
            ';
return $output138;
};
$arguments134 = array();
$arguments134['parameter'] = NULL;
$arguments134['target'] = '';
$arguments134['class'] = '';
$arguments134['title'] = '';
$arguments134['additionalParams'] = '';
$arguments134['additionalAttributes'] = array (
);
$arguments134['useCacheHash'] = false;
$array136 = array (
);$arguments134['parameter'] = $renderingContext->getVariableProvider()->getByPath('file.link', $array136);
$array137 = array (
);$arguments134['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array137);

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output131 .= '
        ';
return $output131;
};
$arguments129 = array();

$output128 .= '';

$output128 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return '
                        FancyBox v3.1 integration
                    ';
};
$arguments207 = array();

$output206 .= NULL;

$output206 .= '
                    <a href="';
$array209 = array (
);
$output206 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array209), ENT_QUOTES);

$output206 .= '"
                       title="';
$array210 = array (
);
$output206 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.title', $array210), ENT_QUOTES);

$output206 .= '"
                       class="lightbox"
                       data-fancybox="';
$array211 = array (
);
$output206 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.uid', $array211), ENT_QUOTES);

$output206 .= '"
                       data-caption="';
$array212 = array (
);
$output206 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.title', $array212), ENT_QUOTES);

$output206 .= '"
                       data-width="';
$array213 = array (
);
$output206 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.properties.width', $array213), ENT_QUOTES);

$output206 .= '"
                       data-height="';
$array214 = array (
);
$output206 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.properties.height', $array214), ENT_QUOTES);

$output206 .= '"
                       data-srcset="
                         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['src'] = NULL;
$arguments215['treatIdAsReference'] = false;
$arguments215['image'] = NULL;
$arguments215['crop'] = NULL;
$arguments215['cropVariant'] = 'default';
$arguments215['width'] = NULL;
$arguments215['height'] = NULL;
$arguments215['minWidth'] = NULL;
$arguments215['minHeight'] = NULL;
$arguments215['maxWidth'] = NULL;
$arguments215['maxHeight'] = NULL;
$arguments215['absolute'] = false;
$array217 = array (
);$arguments215['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array217);
$arguments215['maxWidth'] = 768;
$arguments215['cropVariant'] = 'mobile';

$output206 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext), ENT_QUOTES);

$output206 .= ', ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['src'] = NULL;
$arguments218['treatIdAsReference'] = false;
$arguments218['image'] = NULL;
$arguments218['crop'] = NULL;
$arguments218['cropVariant'] = 'default';
$arguments218['width'] = NULL;
$arguments218['height'] = NULL;
$arguments218['minWidth'] = NULL;
$arguments218['minHeight'] = NULL;
$arguments218['maxWidth'] = NULL;
$arguments218['maxHeight'] = NULL;
$arguments218['absolute'] = false;
$array220 = array (
);$arguments218['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array220);
$arguments218['maxWidth'] = 1536;
$arguments218['cropVariant'] = 'mobile';

$output206 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext), ENT_QUOTES);

$output206 .= ' 2x 767w,
                         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['src'] = NULL;
$arguments221['treatIdAsReference'] = false;
$arguments221['image'] = NULL;
$arguments221['crop'] = NULL;
$arguments221['cropVariant'] = 'default';
$arguments221['width'] = NULL;
$arguments221['height'] = NULL;
$arguments221['minWidth'] = NULL;
$arguments221['minHeight'] = NULL;
$arguments221['maxWidth'] = NULL;
$arguments221['maxHeight'] = NULL;
$arguments221['absolute'] = false;
$array223 = array (
);$arguments221['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array223);
$arguments221['maxWidth'] = 768;
$arguments221['cropVariant'] = 'tablet';

$output206 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext), ENT_QUOTES);

$output206 .= ', ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments224 = array();
$arguments224['src'] = NULL;
$arguments224['treatIdAsReference'] = false;
$arguments224['image'] = NULL;
$arguments224['crop'] = NULL;
$arguments224['cropVariant'] = 'default';
$arguments224['width'] = NULL;
$arguments224['height'] = NULL;
$arguments224['minWidth'] = NULL;
$arguments224['minHeight'] = NULL;
$arguments224['maxWidth'] = NULL;
$arguments224['maxHeight'] = NULL;
$arguments224['absolute'] = false;
$array226 = array (
);$arguments224['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array226);
$arguments224['maxWidth'] = 1536;
$arguments224['cropVariant'] = 'tablet';

$output206 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext), ENT_QUOTES);

$output206 .= ' 2x 992w,
                         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['src'] = NULL;
$arguments227['treatIdAsReference'] = false;
$arguments227['image'] = NULL;
$arguments227['crop'] = NULL;
$arguments227['cropVariant'] = 'default';
$arguments227['width'] = NULL;
$arguments227['height'] = NULL;
$arguments227['minWidth'] = NULL;
$arguments227['minHeight'] = NULL;
$arguments227['maxWidth'] = NULL;
$arguments227['maxHeight'] = NULL;
$arguments227['absolute'] = false;
$array229 = array (
);$arguments227['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array229);
$arguments227['maxWidth'] = 992;
$arguments227['cropVariant'] = 'default';

$output206 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext), ENT_QUOTES);

$output206 .= ', ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['src'] = NULL;
$arguments230['treatIdAsReference'] = false;
$arguments230['image'] = NULL;
$arguments230['crop'] = NULL;
$arguments230['cropVariant'] = 'default';
$arguments230['width'] = NULL;
$arguments230['height'] = NULL;
$arguments230['minWidth'] = NULL;
$arguments230['minHeight'] = NULL;
$arguments230['maxWidth'] = NULL;
$arguments230['maxHeight'] = NULL;
$arguments230['absolute'] = false;
$array232 = array (
);$arguments230['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array232);
$arguments230['maxWidth'] = 1984;
$arguments230['cropVariant'] = 'default';

$output206 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext), ENT_QUOTES);

$output206 .= ' 2x 1199w,
                         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['src'] = NULL;
$arguments233['treatIdAsReference'] = false;
$arguments233['image'] = NULL;
$arguments233['crop'] = NULL;
$arguments233['cropVariant'] = 'default';
$arguments233['width'] = NULL;
$arguments233['height'] = NULL;
$arguments233['minWidth'] = NULL;
$arguments233['minHeight'] = NULL;
$arguments233['maxWidth'] = NULL;
$arguments233['maxHeight'] = NULL;
$arguments233['absolute'] = false;
$array235 = array (
);$arguments233['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array235);
$arguments233['cropVariant'] = 'default';

$output206 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext), ENT_QUOTES);

$output206 .= ' 1200w
                        "
                    >
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments236 = array();
$arguments236['section'] = NULL;
$arguments236['partial'] = NULL;
$arguments236['delegate'] = NULL;
$arguments236['arguments'] = array (
);
$arguments236['optional'] = false;
$arguments236['default'] = NULL;
$arguments236['contentAs'] = NULL;
$arguments236['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array238 = array();
$array239 = array (
);$array238['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array239);
$array240 = array (
);$array238['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array240);
$array241 = array (
);$array238['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array241);
$array242 = array (
);$array238['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array242);
$arguments236['arguments'] = $array238;

$output206 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output206 .= '<i class="threeme-ui-enlarge fa fa-arrows-alt" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['key'] = NULL;
$arguments243['id'] = NULL;
$arguments243['default'] = NULL;
$arguments243['htmlEscape'] = NULL;
$arguments243['arguments'] = NULL;
$arguments243['extensionName'] = NULL;
$arguments243['key'] = 'image.clickenlarge.title';
$arguments243['extensionName'] = 'threeme';

$output206 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext), ENT_QUOTES);

$output206 .= '"></i>
                    </a>
                ';
return $output206;
};
$arguments204 = array();

$output203 .= '';

$output203 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$output247 = '';

$output247 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['section'] = NULL;
$arguments248['partial'] = NULL;
$arguments248['delegate'] = NULL;
$arguments248['arguments'] = array (
);
$arguments248['optional'] = false;
$arguments248['default'] = NULL;
$arguments248['contentAs'] = NULL;
$arguments248['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array250 = array();
$array251 = array (
);$array250['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array251);
$array252 = array (
);$array250['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array252);
$array253 = array (
);$array250['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array253);
$array254 = array (
);$array250['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array254);
$arguments248['arguments'] = $array250;

$output247 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output247 .= '
                ';
return $output247;
};
$arguments245 = array();
$arguments245['if'] = NULL;

$output203 .= '';

$output203 .= '
            ';
return $output203;
};
$arguments151 = array();
$arguments151['then'] = NULL;
$arguments151['else'] = NULL;
$arguments151['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array200 = array();
$array201 = array (
);$array200['0'] = $renderingContext->getVariableProvider()->getByPath('data.image_zoom', $array201);

$expression202 = function($context) {return ($context["node0"]);};
$arguments151['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression202(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array200)
					),
					$renderingContext
				);
$arguments151['__thenClosure'] = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return '
                        FancyBox v3.1 integration
                    ';
};
$arguments154 = array();

$output153 .= NULL;

$output153 .= '
                    <a href="';
$array156 = array (
);
$output153 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array156), ENT_QUOTES);

$output153 .= '"
                       title="';
$array157 = array (
);
$output153 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.title', $array157), ENT_QUOTES);

$output153 .= '"
                       class="lightbox"
                       data-fancybox="';
$array158 = array (
);
$output153 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.uid', $array158), ENT_QUOTES);

$output153 .= '"
                       data-caption="';
$array159 = array (
);
$output153 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.title', $array159), ENT_QUOTES);

$output153 .= '"
                       data-width="';
$array160 = array (
);
$output153 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.properties.width', $array160), ENT_QUOTES);

$output153 .= '"
                       data-height="';
$array161 = array (
);
$output153 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.properties.height', $array161), ENT_QUOTES);

$output153 .= '"
                       data-srcset="
                         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['src'] = NULL;
$arguments162['treatIdAsReference'] = false;
$arguments162['image'] = NULL;
$arguments162['crop'] = NULL;
$arguments162['cropVariant'] = 'default';
$arguments162['width'] = NULL;
$arguments162['height'] = NULL;
$arguments162['minWidth'] = NULL;
$arguments162['minHeight'] = NULL;
$arguments162['maxWidth'] = NULL;
$arguments162['maxHeight'] = NULL;
$arguments162['absolute'] = false;
$array164 = array (
);$arguments162['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array164);
$arguments162['maxWidth'] = 768;
$arguments162['cropVariant'] = 'mobile';

$output153 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext), ENT_QUOTES);

$output153 .= ', ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['src'] = NULL;
$arguments165['treatIdAsReference'] = false;
$arguments165['image'] = NULL;
$arguments165['crop'] = NULL;
$arguments165['cropVariant'] = 'default';
$arguments165['width'] = NULL;
$arguments165['height'] = NULL;
$arguments165['minWidth'] = NULL;
$arguments165['minHeight'] = NULL;
$arguments165['maxWidth'] = NULL;
$arguments165['maxHeight'] = NULL;
$arguments165['absolute'] = false;
$array167 = array (
);$arguments165['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array167);
$arguments165['maxWidth'] = 1536;
$arguments165['cropVariant'] = 'mobile';

$output153 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext), ENT_QUOTES);

$output153 .= ' 2x 767w,
                         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['src'] = NULL;
$arguments168['treatIdAsReference'] = false;
$arguments168['image'] = NULL;
$arguments168['crop'] = NULL;
$arguments168['cropVariant'] = 'default';
$arguments168['width'] = NULL;
$arguments168['height'] = NULL;
$arguments168['minWidth'] = NULL;
$arguments168['minHeight'] = NULL;
$arguments168['maxWidth'] = NULL;
$arguments168['maxHeight'] = NULL;
$arguments168['absolute'] = false;
$array170 = array (
);$arguments168['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array170);
$arguments168['maxWidth'] = 768;
$arguments168['cropVariant'] = 'tablet';

$output153 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext), ENT_QUOTES);

$output153 .= ', ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['src'] = NULL;
$arguments171['treatIdAsReference'] = false;
$arguments171['image'] = NULL;
$arguments171['crop'] = NULL;
$arguments171['cropVariant'] = 'default';
$arguments171['width'] = NULL;
$arguments171['height'] = NULL;
$arguments171['minWidth'] = NULL;
$arguments171['minHeight'] = NULL;
$arguments171['maxWidth'] = NULL;
$arguments171['maxHeight'] = NULL;
$arguments171['absolute'] = false;
$array173 = array (
);$arguments171['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array173);
$arguments171['maxWidth'] = 1536;
$arguments171['cropVariant'] = 'tablet';

$output153 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext), ENT_QUOTES);

$output153 .= ' 2x 992w,
                         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['src'] = NULL;
$arguments174['treatIdAsReference'] = false;
$arguments174['image'] = NULL;
$arguments174['crop'] = NULL;
$arguments174['cropVariant'] = 'default';
$arguments174['width'] = NULL;
$arguments174['height'] = NULL;
$arguments174['minWidth'] = NULL;
$arguments174['minHeight'] = NULL;
$arguments174['maxWidth'] = NULL;
$arguments174['maxHeight'] = NULL;
$arguments174['absolute'] = false;
$array176 = array (
);$arguments174['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array176);
$arguments174['maxWidth'] = 992;
$arguments174['cropVariant'] = 'default';

$output153 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext), ENT_QUOTES);

$output153 .= ', ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['src'] = NULL;
$arguments177['treatIdAsReference'] = false;
$arguments177['image'] = NULL;
$arguments177['crop'] = NULL;
$arguments177['cropVariant'] = 'default';
$arguments177['width'] = NULL;
$arguments177['height'] = NULL;
$arguments177['minWidth'] = NULL;
$arguments177['minHeight'] = NULL;
$arguments177['maxWidth'] = NULL;
$arguments177['maxHeight'] = NULL;
$arguments177['absolute'] = false;
$array179 = array (
);$arguments177['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array179);
$arguments177['maxWidth'] = 1984;
$arguments177['cropVariant'] = 'default';

$output153 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext), ENT_QUOTES);

$output153 .= ' 2x 1199w,
                         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['src'] = NULL;
$arguments180['treatIdAsReference'] = false;
$arguments180['image'] = NULL;
$arguments180['crop'] = NULL;
$arguments180['cropVariant'] = 'default';
$arguments180['width'] = NULL;
$arguments180['height'] = NULL;
$arguments180['minWidth'] = NULL;
$arguments180['minHeight'] = NULL;
$arguments180['maxWidth'] = NULL;
$arguments180['maxHeight'] = NULL;
$arguments180['absolute'] = false;
$array182 = array (
);$arguments180['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array182);
$arguments180['cropVariant'] = 'default';

$output153 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext), ENT_QUOTES);

$output153 .= ' 1200w
                        "
                    >
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['section'] = NULL;
$arguments183['partial'] = NULL;
$arguments183['delegate'] = NULL;
$arguments183['arguments'] = array (
);
$arguments183['optional'] = false;
$arguments183['default'] = NULL;
$arguments183['contentAs'] = NULL;
$arguments183['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array185 = array();
$array186 = array (
);$array185['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array186);
$array187 = array (
);$array185['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array187);
$array188 = array (
);$array185['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array188);
$array189 = array (
);$array185['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array189);
$arguments183['arguments'] = $array185;

$output153 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output153 .= '<i class="threeme-ui-enlarge fa fa-arrows-alt" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['key'] = NULL;
$arguments190['id'] = NULL;
$arguments190['default'] = NULL;
$arguments190['htmlEscape'] = NULL;
$arguments190['arguments'] = NULL;
$arguments190['extensionName'] = NULL;
$arguments190['key'] = 'image.clickenlarge.title';
$arguments190['extensionName'] = 'threeme';

$output153 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext), ENT_QUOTES);

$output153 .= '"></i>
                    </a>
                ';
return $output153;
};
$arguments151['__elseClosures'][] = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['section'] = NULL;
$arguments193['partial'] = NULL;
$arguments193['delegate'] = NULL;
$arguments193['arguments'] = array (
);
$arguments193['optional'] = false;
$arguments193['default'] = NULL;
$arguments193['contentAs'] = NULL;
$arguments193['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array195 = array();
$array196 = array (
);$array195['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array196);
$array197 = array (
);$array195['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array197);
$array198 = array (
);$array195['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array198);
$array199 = array (
);$array195['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array199);
$arguments193['arguments'] = $array195;

$output192 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output192 .= '
                ';
return $output192;
};

$output150 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output150 .= '
        ';
return $output150;
};
$arguments148 = array();
$arguments148['if'] = NULL;

$output128 .= '';

$output128 .= '
    ';
return $output128;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array126 = array (
);$array125['0'] = $renderingContext->getVariableProvider()->getByPath('file.link', $array126);

$expression127 = function($context) {return ($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression127(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return '
                @TODO: Integrate lib.parseFunc for typolink to make use of FancyBox feature - or better write a view helper?
            ';
};
$arguments4 = array();

$output3 .= NULL;

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['section'] = NULL;
$arguments11['partial'] = NULL;
$arguments11['delegate'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['optional'] = false;
$arguments11['default'] = NULL;
$arguments11['contentAs'] = NULL;
$arguments11['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array14);
$array15 = array (
);$array13['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array15);
$array16 = array (
);$array13['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array16);
$array17 = array (
);$array13['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array17);
$arguments11['arguments'] = $array13;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '<i class="threeme-ui-enlarge fa fa-external-link" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['key'] = NULL;
$arguments18['id'] = NULL;
$arguments18['default'] = NULL;
$arguments18['htmlEscape'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['key'] = 'image.clicklink.title';
$arguments18['extensionName'] = 'threeme';

$output10 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext), ENT_QUOTES);

$output10 .= '"></i>
            ';
return $output10;
};
$arguments6 = array();
$arguments6['parameter'] = NULL;
$arguments6['target'] = '';
$arguments6['class'] = '';
$arguments6['title'] = '';
$arguments6['additionalParams'] = '';
$arguments6['additionalAttributes'] = array (
);
$arguments6['useCacheHash'] = false;
$array8 = array (
);$arguments6['parameter'] = $renderingContext->getVariableProvider()->getByPath('file.link', $array8);
$array9 = array (
);$arguments6['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array9);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
        ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return '
                        FancyBox v3.1 integration
                    ';
};
$arguments77 = array();

$output76 .= NULL;

$output76 .= '
                    <a href="';
$array79 = array (
);
$output76 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array79), ENT_QUOTES);

$output76 .= '"
                       title="';
$array80 = array (
);
$output76 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.title', $array80), ENT_QUOTES);

$output76 .= '"
                       class="lightbox"
                       data-fancybox="';
$array81 = array (
);
$output76 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.uid', $array81), ENT_QUOTES);

$output76 .= '"
                       data-caption="';
$array82 = array (
);
$output76 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.title', $array82), ENT_QUOTES);

$output76 .= '"
                       data-width="';
$array83 = array (
);
$output76 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.properties.width', $array83), ENT_QUOTES);

$output76 .= '"
                       data-height="';
$array84 = array (
);
$output76 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.properties.height', $array84), ENT_QUOTES);

$output76 .= '"
                       data-srcset="
                         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['src'] = NULL;
$arguments85['treatIdAsReference'] = false;
$arguments85['image'] = NULL;
$arguments85['crop'] = NULL;
$arguments85['cropVariant'] = 'default';
$arguments85['width'] = NULL;
$arguments85['height'] = NULL;
$arguments85['minWidth'] = NULL;
$arguments85['minHeight'] = NULL;
$arguments85['maxWidth'] = NULL;
$arguments85['maxHeight'] = NULL;
$arguments85['absolute'] = false;
$array87 = array (
);$arguments85['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array87);
$arguments85['maxWidth'] = 768;
$arguments85['cropVariant'] = 'mobile';

$output76 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext), ENT_QUOTES);

$output76 .= ', ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['src'] = NULL;
$arguments88['treatIdAsReference'] = false;
$arguments88['image'] = NULL;
$arguments88['crop'] = NULL;
$arguments88['cropVariant'] = 'default';
$arguments88['width'] = NULL;
$arguments88['height'] = NULL;
$arguments88['minWidth'] = NULL;
$arguments88['minHeight'] = NULL;
$arguments88['maxWidth'] = NULL;
$arguments88['maxHeight'] = NULL;
$arguments88['absolute'] = false;
$array90 = array (
);$arguments88['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array90);
$arguments88['maxWidth'] = 1536;
$arguments88['cropVariant'] = 'mobile';

$output76 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext), ENT_QUOTES);

$output76 .= ' 2x 767w,
                         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['src'] = NULL;
$arguments91['treatIdAsReference'] = false;
$arguments91['image'] = NULL;
$arguments91['crop'] = NULL;
$arguments91['cropVariant'] = 'default';
$arguments91['width'] = NULL;
$arguments91['height'] = NULL;
$arguments91['minWidth'] = NULL;
$arguments91['minHeight'] = NULL;
$arguments91['maxWidth'] = NULL;
$arguments91['maxHeight'] = NULL;
$arguments91['absolute'] = false;
$array93 = array (
);$arguments91['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array93);
$arguments91['maxWidth'] = 768;
$arguments91['cropVariant'] = 'tablet';

$output76 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext), ENT_QUOTES);

$output76 .= ', ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['src'] = NULL;
$arguments94['treatIdAsReference'] = false;
$arguments94['image'] = NULL;
$arguments94['crop'] = NULL;
$arguments94['cropVariant'] = 'default';
$arguments94['width'] = NULL;
$arguments94['height'] = NULL;
$arguments94['minWidth'] = NULL;
$arguments94['minHeight'] = NULL;
$arguments94['maxWidth'] = NULL;
$arguments94['maxHeight'] = NULL;
$arguments94['absolute'] = false;
$array96 = array (
);$arguments94['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array96);
$arguments94['maxWidth'] = 1536;
$arguments94['cropVariant'] = 'tablet';

$output76 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext), ENT_QUOTES);

$output76 .= ' 2x 992w,
                         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['src'] = NULL;
$arguments97['treatIdAsReference'] = false;
$arguments97['image'] = NULL;
$arguments97['crop'] = NULL;
$arguments97['cropVariant'] = 'default';
$arguments97['width'] = NULL;
$arguments97['height'] = NULL;
$arguments97['minWidth'] = NULL;
$arguments97['minHeight'] = NULL;
$arguments97['maxWidth'] = NULL;
$arguments97['maxHeight'] = NULL;
$arguments97['absolute'] = false;
$array99 = array (
);$arguments97['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array99);
$arguments97['maxWidth'] = 992;
$arguments97['cropVariant'] = 'default';

$output76 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext), ENT_QUOTES);

$output76 .= ', ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['src'] = NULL;
$arguments100['treatIdAsReference'] = false;
$arguments100['image'] = NULL;
$arguments100['crop'] = NULL;
$arguments100['cropVariant'] = 'default';
$arguments100['width'] = NULL;
$arguments100['height'] = NULL;
$arguments100['minWidth'] = NULL;
$arguments100['minHeight'] = NULL;
$arguments100['maxWidth'] = NULL;
$arguments100['maxHeight'] = NULL;
$arguments100['absolute'] = false;
$array102 = array (
);$arguments100['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array102);
$arguments100['maxWidth'] = 1984;
$arguments100['cropVariant'] = 'default';

$output76 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext), ENT_QUOTES);

$output76 .= ' 2x 1199w,
                         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['src'] = NULL;
$arguments103['treatIdAsReference'] = false;
$arguments103['image'] = NULL;
$arguments103['crop'] = NULL;
$arguments103['cropVariant'] = 'default';
$arguments103['width'] = NULL;
$arguments103['height'] = NULL;
$arguments103['minWidth'] = NULL;
$arguments103['minHeight'] = NULL;
$arguments103['maxWidth'] = NULL;
$arguments103['maxHeight'] = NULL;
$arguments103['absolute'] = false;
$array105 = array (
);$arguments103['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array105);
$arguments103['cropVariant'] = 'default';

$output76 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext), ENT_QUOTES);

$output76 .= ' 1200w
                        "
                    >
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['section'] = NULL;
$arguments106['partial'] = NULL;
$arguments106['delegate'] = NULL;
$arguments106['arguments'] = array (
);
$arguments106['optional'] = false;
$arguments106['default'] = NULL;
$arguments106['contentAs'] = NULL;
$arguments106['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array109);
$array110 = array (
);$array108['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array110);
$array111 = array (
);$array108['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array111);
$array112 = array (
);$array108['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array112);
$arguments106['arguments'] = $array108;

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output76 .= '<i class="threeme-ui-enlarge fa fa-arrows-alt" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['key'] = NULL;
$arguments113['id'] = NULL;
$arguments113['default'] = NULL;
$arguments113['htmlEscape'] = NULL;
$arguments113['arguments'] = NULL;
$arguments113['extensionName'] = NULL;
$arguments113['key'] = 'image.clickenlarge.title';
$arguments113['extensionName'] = 'threeme';

$output76 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext), ENT_QUOTES);

$output76 .= '"></i>
                    </a>
                ';
return $output76;
};
$arguments74 = array();

$output73 .= '';

$output73 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['section'] = NULL;
$arguments118['partial'] = NULL;
$arguments118['delegate'] = NULL;
$arguments118['arguments'] = array (
);
$arguments118['optional'] = false;
$arguments118['default'] = NULL;
$arguments118['contentAs'] = NULL;
$arguments118['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array121);
$array122 = array (
);$array120['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array122);
$array123 = array (
);$array120['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array123);
$array124 = array (
);$array120['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array124);
$arguments118['arguments'] = $array120;

$output117 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
                ';
return $output117;
};
$arguments115 = array();
$arguments115['if'] = NULL;

$output73 .= '';

$output73 .= '
            ';
return $output73;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array70 = array();
$array71 = array (
);$array70['0'] = $renderingContext->getVariableProvider()->getByPath('data.image_zoom', $array71);

$expression72 = function($context) {return ($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return '
                        FancyBox v3.1 integration
                    ';
};
$arguments24 = array();

$output23 .= NULL;

$output23 .= '
                    <a href="';
$array26 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array26), ENT_QUOTES);

$output23 .= '"
                       title="';
$array27 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.title', $array27), ENT_QUOTES);

$output23 .= '"
                       class="lightbox"
                       data-fancybox="';
$array28 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('data.uid', $array28), ENT_QUOTES);

$output23 .= '"
                       data-caption="';
$array29 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.title', $array29), ENT_QUOTES);

$output23 .= '"
                       data-width="';
$array30 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.properties.width', $array30), ENT_QUOTES);

$output23 .= '"
                       data-height="';
$array31 = array (
);
$output23 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.properties.height', $array31), ENT_QUOTES);

$output23 .= '"
                       data-srcset="
                         ';
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
$arguments32['cropVariant'] = 'mobile';

$output23 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext), ENT_QUOTES);

$output23 .= ', ';
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
$arguments35['cropVariant'] = 'mobile';

$output23 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext), ENT_QUOTES);

$output23 .= ' 2x 767w,
                         ';
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
$arguments38['cropVariant'] = 'tablet';

$output23 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext), ENT_QUOTES);

$output23 .= ', ';
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
$arguments41['cropVariant'] = 'tablet';

$output23 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext), ENT_QUOTES);

$output23 .= ' 2x 992w,
                         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['src'] = NULL;
$arguments44['treatIdAsReference'] = false;
$arguments44['image'] = NULL;
$arguments44['crop'] = NULL;
$arguments44['cropVariant'] = 'default';
$arguments44['width'] = NULL;
$arguments44['height'] = NULL;
$arguments44['minWidth'] = NULL;
$arguments44['minHeight'] = NULL;
$arguments44['maxWidth'] = NULL;
$arguments44['maxHeight'] = NULL;
$arguments44['absolute'] = false;
$array46 = array (
);$arguments44['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array46);
$arguments44['maxWidth'] = 992;
$arguments44['cropVariant'] = 'default';

$output23 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext), ENT_QUOTES);

$output23 .= ', ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['src'] = NULL;
$arguments47['treatIdAsReference'] = false;
$arguments47['image'] = NULL;
$arguments47['crop'] = NULL;
$arguments47['cropVariant'] = 'default';
$arguments47['width'] = NULL;
$arguments47['height'] = NULL;
$arguments47['minWidth'] = NULL;
$arguments47['minHeight'] = NULL;
$arguments47['maxWidth'] = NULL;
$arguments47['maxHeight'] = NULL;
$arguments47['absolute'] = false;
$array49 = array (
);$arguments47['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array49);
$arguments47['maxWidth'] = 1984;
$arguments47['cropVariant'] = 'default';

$output23 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext), ENT_QUOTES);

$output23 .= ' 2x 1199w,
                         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['src'] = NULL;
$arguments50['treatIdAsReference'] = false;
$arguments50['image'] = NULL;
$arguments50['crop'] = NULL;
$arguments50['cropVariant'] = 'default';
$arguments50['width'] = NULL;
$arguments50['height'] = NULL;
$arguments50['minWidth'] = NULL;
$arguments50['minHeight'] = NULL;
$arguments50['maxWidth'] = NULL;
$arguments50['maxHeight'] = NULL;
$arguments50['absolute'] = false;
$array52 = array (
);$arguments50['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array52);
$arguments50['cropVariant'] = 'default';

$output23 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext), ENT_QUOTES);

$output23 .= ' 1200w
                        "
                    >
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['section'] = NULL;
$arguments53['partial'] = NULL;
$arguments53['delegate'] = NULL;
$arguments53['arguments'] = array (
);
$arguments53['optional'] = false;
$arguments53['default'] = NULL;
$arguments53['contentAs'] = NULL;
$arguments53['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array56);
$array57 = array (
);$array55['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array57);
$array58 = array (
);$array55['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array58);
$array59 = array (
);$array55['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array59);
$arguments53['arguments'] = $array55;

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output23 .= '<i class="threeme-ui-enlarge fa fa-arrows-alt" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['htmlEscape'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['key'] = 'image.clickenlarge.title';
$arguments60['extensionName'] = 'threeme';

$output23 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext), ENT_QUOTES);

$output23 .= '"></i>
                    </a>
                ';
return $output23;
};
$arguments21['__elseClosures'][] = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['section'] = NULL;
$arguments63['partial'] = NULL;
$arguments63['delegate'] = NULL;
$arguments63['arguments'] = array (
);
$arguments63['optional'] = false;
$arguments63['default'] = NULL;
$arguments63['contentAs'] = NULL;
$arguments63['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array66);
$array67 = array (
);$array65['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array67);
$array68 = array (
);$array65['dimensions'] = $renderingContext->getVariableProvider()->getByPath('dimensions', $array68);
$array69 = array (
);$array65['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array69);
$arguments63['arguments'] = $array65;

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
                ';
return $output62;
};

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
        ';
return $output20;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
        <figcaption class="image-caption">
            ';
$array261 = array (
);
$output260 .= htmlspecialchars($renderingContext->getVariableProvider()->getByPath('file.description', $array261), ENT_QUOTES);

$output260 .= '
        </figcaption>
    ';
return $output260;
};
$arguments255 = array();
$arguments255['then'] = NULL;
$arguments255['else'] = NULL;
$arguments255['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array257 = array();
$array258 = array (
);$array257['0'] = $renderingContext->getVariableProvider()->getByPath('file.description', $array258);

$expression259 = function($context) {return ($context["node0"]);};
$arguments255['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression259(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array257)
					),
					$renderingContext
				);
$arguments255['__thenClosure'] = $renderChildrenClosure256;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output0 .= '
</figure>

';

return $output0;
}


}
#