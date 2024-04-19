<?php

namespace Fleetbase\Http\Filter;

class ChatLogFilter extends Filter
{
    public function queryForInternal()
    {
        $this->builder
            ->where('company_uuid', $this->session->get('company'))
            ->whereHas('chatChannel', function ($query) {
                $query->whereHas('participants', function ($query) {
                    $query->where('user_uuid', $this->session->get('user'));
                });
            });
    }

    public function queryForPublic()
    {
        $this->queryForInternal();
    }

    public function query(?string $query)
    {
        $this->builder->search($query);
    }
}
