<?php

$download_pdfs = get_field('download_pdfs');
//preint_r($download_pdfs);
if ($download_pdfs) :
  echo '<div class="mt-8 lg:mt-16 pt-8 border-t border-slate-300 border-solid">';
  foreach ($download_pdfs as $pdf) :
    //preint_r($pdf['pdf_file']);
    echo '<div class="rounded-md bg-fiap-light flex mb-4 lg:mb-6 p-4 gap-x-4 lg:py-8 lg:px-8 lg:gap-x-8">';
    echo '<div class="flex-none rounded-full text-white bg-fiap-teal flex w-[3rem] h-[3rem] lg:w-[6rem] p-2 lg:h-[6rem] items-center justify-center lg:p-4">';
    echo fiap_icon(array('icon' => 'articles', 'group' => 'brand', 'size' => '64', 'class' => 'text-white'));
    echo '</div>';
    echo '<div class="flex flex-col lg:flex-row">';
    echo '<div>';
    echo '<h5 class="text-xl lg:text-2xl font-semibold mt-2">' . $pdf['title'] . '</h5>';
    echo '<div class="text-sm lg:text-base leading-snug mt-2 lg:mt-2 lg:pr-8">' . $pdf['description'] . '</div>';
    echo '</div>';
    echo '<div class="mt-2 lg:mt-0 lg:flex-none">';
    echo '<a href="' . $pdf['pdf_file']['url'] . '" class="flex flex-row lg:flex-col items-center text-fiap-darkblue hover:text-fiap-teal" target="_blank">';
    echo fiap_icon(array('icon' => 'pdf', 'group' => 'brand', 'size' => '64', 'class' => '-ml-1.5 lg:-ml-0 w-10 h-auto lg:w-16'));
    echo '<span>Download PDF</span>';
    echo '</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

  endforeach;
  echo '</div>';

endif;
