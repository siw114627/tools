<?php

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $this->giftcode();
        $this->operate();
        $this->manage();
    }

    private function giftcode(){
        $mainMenu = new Menu();
        $mainMenu->name = '礼包码管理';
        $mainMenu->url = 'admin/giftcode';
        $mainMenu->slug = 'giftcode.operate';
        $mainMenu->icon = 'fa fa-cogs';
        $mainMenu->parent_id = 0;
        $mainMenu->save();

        $createMenu = new Menu();
        $createMenu->name = '生成礼包码';
        $createMenu->url = 'admin/create_giftcode';
        $createMenu->slug = 'giftcode.create';
        $createMenu->parent_id = $mainMenu->id;
        $createMenu->save();

        $recondMenu = new Menu();
        $recondMenu->name = '礼包领取记录';
        $recondMenu->url = 'admin/giftcode_recond';
        $recondMenu->slug = 'giftcode.recond';
        $recondMenu->parent_id = $mainMenu->id;
        $recondMenu->save();

        $generalMenu = new Menu();
        $generalMenu->name = '普通礼包码列表';
        $generalMenu->url = 'admin/general_giftcode_list';
        $generalMenu->slug = 'giftcode.general';
        $generalMenu->parent_id = $mainMenu->id;
        $generalMenu->save();

        $commonMenu = new Menu();
        $commonMenu->name = '通用礼包码列表';
        $commonMenu->url = 'admin/common_giftcode_list';
        $commonMenu->slug = 'giftcode.common';
        $commonMenu->parent_id = $mainMenu->id;
        $commonMenu->save();
    }
    private function operate(){
        $mainMenu = new Menu();
        $mainMenu->name = '数据操作';
        $mainMenu->url = 'admin/operate';
        $mainMenu->slug = 'data.operate';
        $mainMenu->icon = 'fa fa-cogs';
        $mainMenu->parent_id = 0;
        $mainMenu->save();

        #========小三国类型start=========
        $groupMenu = new Menu();
        $groupMenu->name = '分组配置管理';
        $groupMenu->url = 'admin/group';
        $groupMenu->slug = 'operate.group';
        $groupMenu->parent_id = $mainMenu->id;
        $groupMenu->save();

        $resMenu = new Menu();
        $resMenu->name = 'RES下发配置';
        $resMenu->url = 'admin/resource';
        $resMenu->slug = 'operate.resource';
        $resMenu->parent_id = $mainMenu->id;
        $resMenu->save();

        #========小三国类型end=========


        $versionMenu = new Menu();
        $versionMenu->name = '版本控制器';
        $versionMenu->url = 'admin/version';
        $versionMenu->slug = 'operate.version';
        $versionMenu->parent_id = $mainMenu->id;
        $versionMenu->save();

        $configMenu = new Menu();
        $configMenu->name = '运维配置表';
        $configMenu->url = 'admin/config';
        $configMenu->slug = 'operate.config';
        $configMenu->parent_id = $mainMenu->id;
        $configMenu->save();

    }

    private function manage(){
        $mainMenu = new Menu();
        $mainMenu->name = '系统管理';
        $mainMenu->url = 'admin/menus';
        $mainMenu->slug = 'system.manage';
        $mainMenu->icon = 'fa fa-cogs';
        $mainMenu->parent_id = 0;
        $mainMenu->save();

        $menusManage = new Menu();
        $menusManage->name = '后台目录管理';
        $menusManage->url = 'admin/menus';
        $menusManage->slug = 'menus.list';
        $menusManage->parent_id = $mainMenu->id;
        $menusManage->save();

        $adminUserManage = new Menu();
        $adminUserManage->name = '后台用户管理';
        $adminUserManage->url = 'admin/adminuser';
        $adminUserManage->slug = 'adminuser.list';
        $adminUserManage->parent_id = $mainMenu->id;
        $adminUserManage->save();

        $permissionManage = new Menu();
        $permissionManage->name = '权限管理';
        $permissionManage->url = 'admin/permission';
        $permissionManage->slug = 'permission.list';
        $permissionManage->parent_id = $mainMenu->id;
        $permissionManage->save();

        $roleManage = new Menu();
        $roleManage->name = '角色管理';
        $roleManage->url = 'admin/role';
        $roleManage->slug = 'role.list';
        $roleManage->parent_id = $mainMenu->id;
        $roleManage->save();
    }
}
