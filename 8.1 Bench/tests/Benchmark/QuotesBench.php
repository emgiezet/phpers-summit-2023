<?php

namespace emgiezet\Tests\Benchmark;

final class QuotesBench
{

    /**
     * @Revs(100000)
     *
     */
    public function benchSingle()
    {
        $string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. $Integer pulvinar neque est. Praesent semper elit vel nunc lacinia congue. Aliquam erat volutpat. Duis eget orci suscipit, luctus nunc in, scelerisque velit. Ut placerat risus et velit congue imperdiet. Cras ut nulla elit. Morbi elementum suscipit risus sit amet commodo. Pellentesque magna orci, blandit ut sagittis sit amet, convallis sed turpis. Vestibulum ac porttitor purus. Aliquam velit purus, efficitur consectetur vestibulum eu, cursus nec nunc.'
            .'Nunc eu sem et justo venenatis ornare. Aenean egestas ex et augue egestas, a vestibulum odio congue. Praesent ultricies magna vitae enim volutpat, cursus semper sapien egestas. Nam semper eros malesuada urna tincidunt commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Nunc eu odio dui. Integer finibus nisi eget nunc ultricies scelerisque. Nullam venenatis, nisi vitae ultrices aliquet, augue nisl iaculis justo, sed rhoncus eros est vitae nulla. Donec leo justo, aliquam id mauris ac, imperdiet egestas nulla. Nam congue purus nibh, eget gravida libero porta id. Nullam convallis pulvinar massa in laoreet. Morbi interdum finibus tellus et condimentum.'
            .'Curabitur quam lorem, tincidunt ut sapien a, vehicula tempor tortor. Proin mollis sed quam eu lobortis. Vivamus sem felis, vehicula a feugiat non, porttitor eget ex. Suspendisse eget suscipit ex. Quisque dictum blandit justo, non pharetra urna hendrerit nec. Maecenas velit dolor, consectetur nec posuere in, sollicitudin congue tellus. Praesent pretium vehicula diam vitae condimentum. Etiam sit amet tellus sit amet tellus laoreet condimentum. Sed eu varius mi, nec pellentesque neque. Morbi cursus porttitor sem, quis porta urna pharetra tempus. Nulla a felis vel turpis vehicula gravida eu ut ex. Aliquam ac varius libero, ac semper lectus. Quisque eu sapien dui. Proin tincidunt interdum ex in lacinia. Maecenas tincidunt vulputate nisi sit amet sodales. Donec eget diam et nulla rutrum euismod eget vitae magna.'
            .'Curabitur sit amet orci sit amet lorem lobortis condimentum. Quisque velit ante, lacinia in magna eget, sagittis consequat lacus. Donec pellentesque sapien non leo fringilla, nec varius arcu luctus. Sed commodo sed nisl eget tincidunt. Maecenas blandit semper dolor, id efficitur lacus ornare vitae. Praesent vulputate egestas augue sit amet lobortis. Nullam vulputate erat ac ultrices feugiat. Praesent ornare lorem in neque mattis, ac fringilla ligula commodo. Nam pretium ultrices turpis, vel aliquet nisl.'
            .'Phasellus laoreet luctus ullamcorper. In eget cursus magna, et tincidunt felis. Mauris porttitor elit risus, vel mattis est imperdiet sit amet. Cras in mi eu elit tempus eleifend id in nisl. Curabitur ac blandit risus. Nullam commodo augue iaculis quam hendrerit, et vulputate lorem placerat. Morbi sit amet ex laoreet, auctor est a, tristique velit. Suspendisse potenti. Vestibulum et turpis posuere, malesuada neque in, euismod felis. In a elit quis ex mollis finibus. Integer a felis mauris. Cras tellus lacus, bibendum quis justo in, blandit efficitur orci. Pellentesque mauris velit, tempor at tortor vel, porta interdum nibh. Mauris lacinia interdum sem at luctus.';
        ob_start();
        print($string);
        ob_end_clean();
    }
    /**
     * @Revs(100000)
     *
     */
    public function benchDouble()
    {
        $string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. $Integer pulvinar neque est. Praesent semper elit vel nunc lacinia congue. Aliquam erat volutpat. Duis eget orci suscipit, luctus nunc in, scelerisque velit. Ut placerat risus et velit congue imperdiet. Cras ut nulla elit. Morbi elementum suscipit risus sit amet commodo. Pellentesque magna orci, blandit ut sagittis sit amet, convallis sed turpis. Vestibulum ac porttitor purus. Aliquam velit purus, efficitur consectetur vestibulum eu, cursus nec nunc."
            ."Nunc eu sem et justo venenatis ornare. Aenean egestas ex et augue egestas, a vestibulum odio congue. Praesent ultricies magna vitae enim volutpat, cursus semper sapien egestas. Nam semper eros malesuada urna tincidunt commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Nunc eu odio dui. Integer finibus nisi eget nunc ultricies scelerisque. Nullam venenatis, nisi vitae ultrices aliquet, augue nisl iaculis justo, sed rhoncus eros est vitae nulla. Donec leo justo, aliquam id mauris ac, imperdiet egestas nulla. Nam congue purus nibh, eget gravida libero porta id. Nullam convallis pulvinar massa in laoreet. Morbi interdum finibus tellus et condimentum."
            ."Curabitur quam lorem, tincidunt ut sapien a, vehicula tempor tortor. Proin mollis sed quam eu lobortis. Vivamus sem felis, vehicula a feugiat non, porttitor eget ex. Suspendisse eget suscipit ex. Quisque dictum blandit justo, non pharetra urna hendrerit nec. Maecenas velit dolor, consectetur nec posuere in, sollicitudin congue tellus. Praesent pretium vehicula diam vitae condimentum. Etiam sit amet tellus sit amet tellus laoreet condimentum. Sed eu varius mi, nec pellentesque neque. Morbi cursus porttitor sem, quis porta urna pharetra tempus. Nulla a felis vel turpis vehicula gravida eu ut ex. Aliquam ac varius libero, ac semper lectus. Quisque eu sapien dui. Proin tincidunt interdum ex in lacinia. Maecenas tincidunt vulputate nisi sit amet sodales. Donec eget diam et nulla rutrum euismod eget vitae magna."
            ."Curabitur sit amet orci sit amet lorem lobortis condimentum. Quisque velit ante, lacinia in magna eget, sagittis consequat lacus. Donec pellentesque sapien non leo fringilla, nec varius arcu luctus. Sed commodo sed nisl eget tincidunt. Maecenas blandit semper dolor, id efficitur lacus ornare vitae. Praesent vulputate egestas augue sit amet lobortis. Nullam vulputate erat ac ultrices feugiat. Praesent ornare lorem in neque mattis, ac fringilla ligula commodo. Nam pretium ultrices turpis, vel aliquet nisl."
            ."Phasellus laoreet luctus ullamcorper. In eget cursus magna, et tincidunt felis. Mauris porttitor elit risus, vel mattis est imperdiet sit amet. Cras in mi eu elit tempus eleifend id in nisl. Curabitur ac blandit risus. Nullam commodo augue iaculis quam hendrerit, et vulputate lorem placerat. Morbi sit amet ex laoreet, auctor est a, tristique velit. Suspendisse potenti. Vestibulum et turpis posuere, malesuada neque in, euismod felis. In a elit quis ex mollis finibus. Integer a felis mauris. Cras tellus lacus, bibendum quis justo in, blandit efficitur orci. Pellentesque mauris velit, tempor at tortor vel, porta interdum nibh. Mauris lacinia interdum sem at luctus.";
        ob_start();
        print($string);
        ob_end_clean();
        
    }
}
