<?php


namespace TCG\Voyager\FormFields;


class ImageNewHandler extends AbstractHandler
{

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('voyager::formfields.image_new', [
            'row'             => $row,
            'options'         => $options,
            'dataType'        => $dataType,
            'dataTypeContent' => $dataTypeContent,
        ]);
    }
}