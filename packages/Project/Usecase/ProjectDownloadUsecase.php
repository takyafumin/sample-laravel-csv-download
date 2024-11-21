<?php

namespace Packages\Project\Usecase;

use Illuminate\Support\Collection;
use Packages\Project\Infra\Query\ProjectListQuery;

/**
 * ProjectDownload Usecase
 */
class ProjectDownloadUsecase
{
    private ProjectListQuery $projectListQuery;

    public function __construct(ProjectListQuery $projectListQuery)
    {
        $this->projectListQuery = $projectListQuery;
    }

    public function exec(): Collection
    {
        // プロジェクトデータ取得（タスクを含む）
        return $this->projectListQuery->get();
    }
}