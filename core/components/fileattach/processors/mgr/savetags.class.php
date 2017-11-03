<?php

class FileItemTagsProcessor extends modProcessor
{


    /**
     * @return array|string
     */
    public function process()
    {
        $ids = json_decode($this->getProperty('ids'), true);

        if (empty($ids)) {
            return $this->success();
        }

        $tags = $this->getProperty('tags');
        
        foreach ($ids as $id) {
            
            if (!empty($tags) && is_array($tags)) {

                $this->modx->removeCollection('FileTagItem', array('file_id' => $id));

                foreach ($tags as $tag) {
                    $this->modx->newObject('FileTagItem', array('file_id' => $id, 'tag' => $tag))->save();
                }
            }
        }

        return $this->success();
    }

}

return 'FileItemTagsProcessor';