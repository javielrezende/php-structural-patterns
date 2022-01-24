<?php

namespace PersonalProjects\DesignPattern\Report;

use SimpleXMLElement;

class ExportedXmlFile implements ExportedFile
{
    private string $elementName;

    public function __construct(string $elementName)
    {
        $this->elementName = $elementName;    
    }

    public function export(ExportedContent $exportedContent): string
    {
        $element = new SimpleXMLElement("<{$this->elementName} />");

        foreach ($exportedContent->content() as $item => $value) {
            $element->addChild($item, $value);
        }

        $pathFile = tempnam(sys_get_temp_dir(), 'xml');

        $element->asXML($pathFile);

        return $pathFile;
    }
}