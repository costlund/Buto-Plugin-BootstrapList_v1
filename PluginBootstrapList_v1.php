<?php
class PluginBootstrapList_v1{
  public function widget_list($data){
    /**
     * 
     */
    wfPlugin::enable('icons/bootstrap_v1_8_1');
    /**
     * 
     */
    $data = new PluginWfArray($data['data']);
    $element = new PluginWfYml(__DIR__.'/element/'.__FUNCTION__.'.yml');
    $element->setByTag($data->get(), 'data');
    $item = array();
    foreach($data->get('item') as $v){
      $i = new PluginWfArray($v);
      $element_item = new PluginWfYml(__DIR__.'/element/'.__FUNCTION__.'_item.yml');
      $element_item->setByTag($i->get(), 'rs', true);
      /**
       * attribute/onclick
       */
      if($i->get('onclick')){
        $element_item->set('innerHTML/0/attribute/onclick', $i->get('onclick'));
      }
      /**
       * 
       */
      if($i->get('target')){
        $element_item->set('innerHTML/0/attribute/target', $i->get('target'));
      }
      /**
       * 
       */
      $item[] = $element_item->get();
    }
    $element->setByTag(array('item' => $item));
    wfDocument::renderElement($element);
  }
  public function widget_jumbotron($data){
    /**
     * 
     */
    wfPlugin::enable('icons/bootstrap_v1_8_1');
    /**
     * 
     */
    $data = new PluginWfArray($data['data']);
    $element = new PluginWfYml(__DIR__.'/element/'.__FUNCTION__.'.yml');
    $element->setByTag($data->get(), 'data');
    $item = array();
    foreach($data->get('item') as $v){
      $i = new PluginWfArray($v);
      $element_item = new PluginWfYml(__DIR__.'/element/'.__FUNCTION__.'_item.yml');
      $element_item->setByTag($i->get(), 'rs', true);
      /**
       * attribute/onclick
       */
      if($i->get('onclick')){
        $element_item->set('innerHTML/0/attribute/onclick', $i->get('onclick'));
      }
      /**
       * 
       */
      if($i->get('target')){
        $element_item->set('innerHTML/0/attribute/target', $i->get('target'));
      }
      /**
       * 
       */
      $item[] = $element_item->get();
    }
    $element->setByTag(array('item' => $item));
    wfDocument::renderElement($element);
  }
}
