<?php

class Moturdrn_GW2Guilds_AlertHandler_Pending extends XenForo_AlertHandler_Abstract
{
    public function getContentByIds(array $contentIds, $model, $userId, array $viewingUser)
    {
        /** @var Moturdrn_GW2Guilds_Model_Pending $pendingModel */
        $pendingModel = $model->getModelFromCache('Moturdrn_GW2Guilds_Model_Pending');

        return $pendingModel->getPendingRequestsByIds($contentIds);
    }

    public function canViewAlert(array $alert, $content, array $viewingUser)
    {
        return true;
    }


}