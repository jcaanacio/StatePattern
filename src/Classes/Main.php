<?php 
namespace Portal;
use Portal\Content\TouristsSecret;
use Portal\States\DraftTopic;
class Main {

    public function main () {
        // string $title, string $focusKeyword, string $bodyContext ,AbstractState $state 

        /**
         * Portal is mainly used for maintaining Wordpress sites,
         * from post/content creation up to publishing it into it's respective site.
         * Used State pattern to address the following
         * Should be able to support adding of different post/content that is completely different from other post/content
         * Should be able to support dynamic adding of post/content's state.
         */


        $draftTitleState = new DraftTopic();
        $touristSecretContent = new TouristsSecret(
            "Sample Title",
            "Sample Focus Keyword",
            "Sample Body",
            $draftTitleState
        );


        if ($touristSecretContent->getState()->isPromotable()) {
            /**  */
            $touristSecretContent->setState($touristSecretContent->getState()->promote());
        }


        if ($touristSecretContent->getState()->isDemotable()) {
            $touristSecretContent->setState($touristSecretContent->getState()->demote());
        }
        // Should Output Rejected Topic
        $touristSecretContent->getState()->getLabel();
     }
} 