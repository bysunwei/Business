<?php

namespace Home\Model;
use Think\Model\RelationModel;

class NavModel extends RelationModel{
	protected $_link = array(
			'Nav'=> array(										//关联子菜单
					'mapping_type'=>self::HAS_MANY,
					'mapping_name'=>'subitem',
			//	'mapping_order'=>'id',
					'parent_key'=>'pid',
			),

	);
}


?>