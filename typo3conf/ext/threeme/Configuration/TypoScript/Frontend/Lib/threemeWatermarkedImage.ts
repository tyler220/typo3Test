/*
Watermarked images
Alternative implementation for watermarked image rendering.
Note: EXT 'filemetadata' has to be activated if you want to use additional media fields.

Usage, see partial FSC > MediaGallery:
<f:cObject
    typoscriptObjectPath="lib.threemeWatermarkedImage"
    currentValueKey="uid"
    data="{
        uid: column.media.uid,
        width: '{f:if(condition: \'{data.imagewidth} > 0\', then: \'{cropMediaWidth}\', else: \'{column.dimensions.width}\')}',
        height: '{f:if(condition: \'{data.imageheight} > 0\', then: \'{cropMediaHeight}\', else: \'{column.dimensions.height}\')}',
        alt: column.media.alternative,
        title: column.media.title,
        params: 'class=\"img-responsive{f:if(condition:\'{data.layout}\', then:\' threeme-image-layout-{data.layout}\')}\"',
        watermark: column.media.properties.copyright
    }"
/>
*/
lib.threemeWatermarkedImage = IMAGE
lib.threemeWatermarkedImage {
    titleText.field = title
    altText.field = alt
    params.field = params

    # Use GIFBUILDER to combine the original image and overlaying text
    file = GIFBUILDER
    file {
        XY = [10.w],[10.h]

        # Original image
        10 = IMAGE
        10 {
            file {
                import.current = 1
                treatIdAsReference = 1
                width.field = width
                height.field = height
            }
        }

        # Overlaying text
        20 = TEXT
        20 {
            text.field = watermark
            fontSize = 10
            fontColor= #000000
            offset = 5, [10.h] - 5
        }
    }
}
