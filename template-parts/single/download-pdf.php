<?php

$download_pdfs = get_field('download_pdfs');
//preint_r($download_pdfs);
if ($download_pdfs) :
  echo '<div class="mt-16 pt-8 border-t border-slate-300 border-solid">';
  foreach ($download_pdfs as $pdf) :
    //preint_r($pdf['pdf_file']);
    echo '<div class="rounded-md bg-fiap-light mb-6 py-8 px-8 flex gap-x-8">';
    echo '<div class="flex-none rounded-full text-white bg-fiap-teal flex w-[6rem] h-[6rem] items-center justify-center p-4">';
    echo fiap_icon(array('icon' => 'articles', 'group' => 'brand', 'size' => '64', 'class' => 'text-white'));
    echo '</div>';
    echo '<div class="">';
    echo '<h5 class="font-semibold mt-2">' . $pdf['title'] . '</h5>';
    echo '<div class="text-base leading-snug mt-2 pr-8">' . $pdf['description'] . '</div>';
    echo '</div>';
    echo '<div class="flex-none">';
    echo '<a href="' . $pdf['pdf_file']['url'] . '" class="flex flex-col items-center text-fiap-darkblue hover:text-fiap-teal" target="_blank">';
    echo fiap_icon(array('icon' => 'pdf', 'group' => 'brand', 'size' => '64', 'class' => ''));
    echo 'Download PDF';
    echo '</a>';
    echo '</div>';
    echo '</div>';

  endforeach;
  echo '</div>';

endif;
