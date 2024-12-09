<?php
namespace Perspective\BDScript\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Perspective\BDScript\Model\PostFactory;

class Post implements ArgumentInterface
{
    /**
     * @var PostFactory
     */
    private $_postFactory;

    /**
     * Post constructor.
     *
     * @param PostFactory $postFactory
     */
    public function __construct(
        PostFactory $postFactory
    ) {
        $this->_postFactory = $postFactory;
    }

    /**
     * Get post collection.
     *
     * @return \Perspective\BDScript\Model\ResourceModel\Post\Collection
     */
    public function getPostCollection()
    {
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        return $collection;
    }
}
