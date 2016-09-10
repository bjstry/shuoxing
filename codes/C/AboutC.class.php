<?php
class AboutC extends C{
	public function Index(){
		$this->assign('title','关于硕星，硕星，西安硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('jnstatus','uk-active');
		$this->assign('status','uk-active');
		$row['keywords'] = "硕星怎么样，硕星，硕星信息，西安硕星信息技术有限公司";
		$this->assign('row',$row);
		$this->display();
	}
	public function Culture(){
		$row['keywords'] = "硕星文化，硕星，硕星信息，西安硕星信息技术有限公司";
		$this->assign('title','企业文化，硕星，西安硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('jnstatus','uk-active');
		$this->assign('status','uk-active');
		$this->assign('row',$row);
		$this->display();
	}
	public function Joinus(){
		$mycss = "<style rel='stylesheet' href='"._P_."/css/joinus.css'></style>";
		$row['jobs'][] = array("jobname"=>"品牌推广专员","jobduty"=>"1、协助品牌主管实施企业的品牌推广计划；
<br>2、建立并维护异业合作伙伴关系及相关宣传和策划活动；
<br>3、进行产品市场推广的策划和实施，并对推广效果进行跟踪；
<br>4、定期分析市场情况，并提出有效推广的建议","jobentails"=>"1、市场营销、管理类、广告类或相关专业专科以上学历；
<br>2、具有IT行业的从业背景，有品牌专员工作经验者优先；
<br>3、有较好的综合素质及文化修养；
<br>4、诚实勤奋，有良好的沟通及协调能力，较强的执行能力。
<br>5、具有亲和力，敬业、有团队合作精神。");
		$row['jobs'][] = array("jobname"=>"销售总监","jobduty"=>"1、协助制定公司的发展战略，销售战略，制定并组织实施完整的销售计划，领导团队将计划转变为销售结果；
<br>2、开拓热力行业业务，与客户、同行业间（热力行业）建立良好的合作关系；
<br>3、制定全年销售费用预算，引导和控制市场销售工作的方向和进度；
<br>4、分解销售任务指标，制定责任、费用评价办法，制定、调整销售运营政策；
<br>5、建立热力行业客户数据库，了解不同规模用户的现状与可能需求;
<br>6、组织部门开发多种销售手段，完成销售计划及回款任务；
<br>7、销售团队建设，帮助建立、补充、发展、培养销售队伍；
<br>8、主持公司重大营销合同的谈判与签订工作；
<br>9、进行客户分析，挖掘用户需求，开发新的客户和新的市场领域；","jobentails"=>"1、28－40岁，大专以上学历，有良好的职业操守，品行优秀，综合素质高；
<br>2、具有五年以上市场营销或管理工作经验；
<br>3、文字能力强，表达能力强；
<br>4、具有较强的市场开拓与销售技能；
<br>5、具备优秀的沟通能力和团队合作精神，组建和培训团队经验丰富，既往销售业绩良好；
<br>6、具备较强的时间管理能力和工作管理能力；
<br>7、有很好的热力行业人际资源。");
		$row['jobs'][] = array("jobname"=>"销售主管","jobduty"=>"1、负责公司产品的销售及推广；
<br>2、根据市场营销计划，完成部门销售指标；
<br>3、开拓新市场，发展新客户，增加产品销售范围；
<br>4、负责辖区市场信息的收集及竞争对手的分析；
<br>5、负责销售区域内销售活动的策划和执行，完成销售任务;
<br>6、管理维护客户关系以及客户间的长期战略合作计划","jobentails"=>"1、大专及以上学历，专业不限；
<br>2、1-2年以上销售行业工作经验，业绩突出者优先；
<br>3、反应敏捷、表达能力强，具有较强的沟通能力及交际技巧，具有亲和力；
<br>4、具备一定的市场分析及判断能力，良好的客户服务意识；
<br>5、有责任心，能承受较大的工作压力。");
		$row['jobs'][] = array("jobname"=>"销售助理","jobduty"=>"1.负责公司产品及解决方案的销售工作，执行公司相关销售策略；<br>2.负责行业市场信息搜集、分析，开拓和维护行业客户；<br>3.协调售前与售后技术支持资源，为客户提供良好的解决方案和服务；<br>4.负责完成上级交办的其它任务。","jobentails"=>"1、男女不限，大专以上学历，市场营销、销售经验丰富者优先考虑；
<br>2、具备优秀的沟通技巧、表达技巧和销售技巧，普通话标准流利；<br>3、富有开拓精神和良好的团队合作意识，有很强的学习和沟通能力，良好的协调能力；<br>4、具有敬业精神，有强烈的竞争意识，能积极面对工作挑战；");
		$this->assign('title','加入硕星，硕星，西安硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('jnstatus','uk-active');
		$row['keywords'] = "在硕星找工作，硕星，硕星信息，西安硕星信息技术有限公司";
		$this->assign('status','uk-active');
		$this->assign('row',$row);
		$this->assign('mycss',$mycss);
		$this->display();
	}
	public function Contact(){
		$this->assign('title','联系我们，硕星，西安硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$row['keywords'] = "联系硕星，硕星，硕星信息，西安硕星信息技术有限公司";
		$this->assign('jnstatus','uk-active');
		$this->assign('status','uk-active');
		$this->assign('row',$row);
		$this->display();
	}
	public function Jobget(){
		if($_POST['submit']){
			$jobduty = ereg_replace("\n","<br>",$_POST['jobduty']);
			$jobentails = ereg_replace("\n","<br>",$_POST['jobentails']);
			//$str = $_POST['jobduty'];
			//echo $str
			echo $jobduty;
			echo "------------------------".$jobentails;
		}	
		$this->display();
	}
}