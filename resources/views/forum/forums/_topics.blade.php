{{--
    Copyright 2015-2016 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
<div class="forum-topics">
    <h2 class="forum-topics__title">
        {{ $title }}
    </h2>

    <ul class="forum-topics__entries js-forum-topic-entries">
        @if ($withNewTopicLink ?? false)
            @include('forum.forums._new_topic')
        @endif

        @if (count($topics) === 0)
            @include('forum.forums._topic_empty')
        @else
            @foreach($topics as $topic)
                @include($row ?? 'forum.forums._topic')
            @endforeach
        @endif
    </ul>
</div>
