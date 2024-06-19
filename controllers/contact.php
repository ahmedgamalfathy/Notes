    <?php

    $heading="Contact Us";
    $title="contact";
        //logic filter
        //  function filter ($items,$fn){
        //       $filteredItem=[];
        //             foreach($items as $item){
        //                         if($fn($item)){
        //                            $filteredItem[]=$item;
        //                         }
        //             }
        //     return $filteredItem;
        //   };
        //   $FilterBook =array_filter($books,function($book){
        //       return  $book['releaseyear']>=1988 && $book['releaseyear']<=2001 ;
        //   });
    /** 
    <ul>
        <?php foreach($FilterBook as $book):?>
                <li>
                    <a href="<?= $book['purchaseUrl']?>">
                    <?= $book['name']; ?> (<?=  $book['releaseyear'] ?>) - By <?=  $book['author'] ?>
                    </a>
                </li>
        <?php endforeach; ?>
    </ul>
    */
  require"views/contact.view.php";
 
