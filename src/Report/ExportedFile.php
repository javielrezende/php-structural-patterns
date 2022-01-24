<?php

namespace PersonalProjects\DesignPattern\Report;

interface ExportedFile
{
    /**
     * 
     * 
     * @return string Path from saved file
     */
    public function export(ExportedContent $exportedContent): string;
}