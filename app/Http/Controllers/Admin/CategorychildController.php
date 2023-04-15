<?php
namespace App\Http\Controllers\Admin;

use App\Categorychild;
use App\Article;

class CategorychildController extends CommonController
{
    public function index(Categorychild $categorychild)
    {
        $data = $categorychild->orderBy('id', 'ASC')->get();
        $this->assign('categorychild', $data);
        return $this->fetch('admin/category_list');
    }

    public function edit(Categorychild $categorychild)
    {
        $id = $this->request->get('id');
        if ($id) {
            $data = $categorychild->where('id', $id)->first();
            if (!$data) {
                return '栏目不存在！';
            }
        } else {
            $data = ['name' => '', 'parent_id' => '99'];
        }
        $this->assign('id', $id);
        $this->assign('data', $data);
        return $this->fetch('admin/category_edit');
    }

    public function save(Categorychild $categorychild)
    {
        $id = $this->request->post('id');
        $data = [
            'name' => $this->request->post('name', ''),
            'parent_id' => $this->request->post('parent_id', 99)
        ];
        if ($id) {
            $categorychild->where('id', $id)->update($data);
            $this->success('修改完成。');
        } else {
            $categorychild->insert($data);
            $this->success('添加完成。');
        }
    }

    public function delete(Categorychild $categorychild, Article $article)
    {
        $id = $this->request->get('id');
        if ($categorychild->where('id', $id)->delete()) {
            $article->where('cid', $id)->update(['cid' => 0]);
            $this->success('删除完成。');
        }
        $this->error('删除失败');
    }
}
