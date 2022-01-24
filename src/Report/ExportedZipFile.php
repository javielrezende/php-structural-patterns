<?php

namespace PersonalProjects\DesignPattern\Report;

use SimpleXMLElement;
use ZipArchive;

class ExportedZipFile implements ExportedFile
{
    private string $nameFile;

    public function __construct(string $nameFile)
    {
        $this->nameFile = $nameFile;
    }

    public function export(ExportedContent $exportedContent): string
    {
        $pathFile = $pathFile = tempnam(sys_get_temp_dir(), 'zip');;

        $zipFile = new ZipArchive();
        $zipFile->open($pathFile);
        $zipFile->addFromString($this->nameFile, serialize($exportedContent->content()));
        $zipFile->close();

        return $pathFile;
    }
}