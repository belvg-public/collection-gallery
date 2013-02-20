<?php
/**
 * @author: A.A.Treitjak
 * @copyright: 2012 - 2013 BelVG.com
 */

class Belvg_Collectiongallery_Model_Observer
{
    public function loadMediaGallery(Varien_Event_Observer $observer) {
        foreach ($observer->getEvent()->getCollection() as $item) {
            $item->load('media_gallery');
        }
    }
}
