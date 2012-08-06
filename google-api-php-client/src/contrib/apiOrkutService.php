<?php
/*
 * Copyright (c) 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

require_once 'service/apiModel.php';
require_once 'service/apiService.php';
require_once 'service/apiServiceRequest.php';


  /**
   * The "communityMembers" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $communityMembers = $orkutService->communityMembers;
   *  </code>
   */
  class CommunityMembersServiceResource extends apiServiceResource {


    /**
     * Makes the user join a community. (communityMembers.insert)
     *
     * @param int $communityId ID of the community.
     * @param string $userId ID of the user.
     * @return CommunityMembers
     */
    public function insert($communityId, $userId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new CommunityMembers($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the relationship between a user and a community. (communityMembers.get)
     *
     * @param int $communityId ID of the community.
     * @param string $userId ID of the user.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @return CommunityMembers
     */
    public function get($communityId, $userId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new CommunityMembers($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists members of a community. (communityMembers.list)
     *
     * @param int $communityId The ID of the community whose members will be listed.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string pageToken A continuation token that allows pagination.
     * @opt_param bool friendsOnly Whether to list only community members who are friends of the user.
     * @opt_param string maxResults The maximum number of members to include in the response.
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @return CommunityMembersList
     */
    public function listCommunityMembers($communityId, $optParams = array()) {
      $params = array('communityId' => $communityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new CommunityMembersList($data);
      } else {
        return $data;
      }
    }
    /**
     * Makes the user leave a community. (communityMembers.delete)
     *
     * @param int $communityId ID of the community.
     * @param string $userId ID of the user.
     */
    public function delete($communityId, $userId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "activities" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $activities = $orkutService->activities;
   *  </code>
   */
  class ActivitiesServiceResource extends apiServiceResource {


    /**
     * Retrieves a list of activities. (activities.list)
     *
     * @param string $userId The ID of the user whose activities will be listed. Can be me to refer to the viewer (i.e. the authenticated user).
     * @param string $collection The collection of activities to list.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string pageToken A continuation token that allows pagination.
     * @opt_param string maxResults The maximum number of activities to include in the response.
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @return ActivityList
     */
    public function listActivities($userId, $collection, $optParams = array()) {
      $params = array('userId' => $userId, 'collection' => $collection);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new ActivityList($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes an existing activity, if the access controls allow it. (activities.delete)
     *
     * @param string $activityId ID of the activity to remove.
     */
    public function delete($activityId, $optParams = array()) {
      $params = array('activityId' => $activityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "communityPollComments" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $communityPollComments = $orkutService->communityPollComments;
   *  </code>
   */
  class CommunityPollCommentsServiceResource extends apiServiceResource {


    /**
     * Adds a comment on a community poll. (communityPollComments.insert)
     *
     * @param int $communityId The ID of the community whose poll is being commented.
     * @param string $pollId The ID of the poll being commented.
     * @param CommunityPollComment $postBody
     * @return CommunityPollComment
     */
    public function insert($communityId, $pollId, CommunityPollComment $postBody, $optParams = array()) {
      $params = array('communityId' => $communityId, 'pollId' => $pollId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new CommunityPollComment($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the comments of a community poll. (communityPollComments.list)
     *
     * @param int $communityId The ID of the community whose poll is having its comments listed.
     * @param string $pollId The ID of the community whose polls will be listed.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string pageToken A continuation token that allows pagination.
     * @opt_param string maxResults The maximum number of comments to include in the response.
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @return CommunityPollCommentList
     */
    public function listCommunityPollComments($communityId, $pollId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'pollId' => $pollId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new CommunityPollCommentList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "communityPolls" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $communityPolls = $orkutService->communityPolls;
   *  </code>
   */
  class CommunityPollsServiceResource extends apiServiceResource {


    /**
     * Retrieves the polls of a community. (communityPolls.list)
     *
     * @param string $communityId The ID of the community which polls will be listed.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string pageToken A continuation token that allows pagination.
     * @opt_param string maxResults The maximum number of polls to include in the response.
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @return CommunityPollList
     */
    public function listCommunityPolls($communityId, $optParams = array()) {
      $params = array('communityId' => $communityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new CommunityPollList($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves one specific poll of a community. (communityPolls.get)
     *
     * @param int $communityId The ID of the community for whose poll will be retrieved.
     * @param string $pollId The ID of the poll to get.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @return CommunityPoll
     */
    public function get($communityId, $pollId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'pollId' => $pollId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new CommunityPoll($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "communityMessages" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $communityMessages = $orkutService->communityMessages;
   *  </code>
   */
  class CommunityMessagesServiceResource extends apiServiceResource {


    /**
     * Adds a message to a given community topic. (communityMessages.insert)
     *
     * @param int $communityId The ID of the community the message should be added to.
     * @param string $topicId The ID of the topic the message should be added to.
     * @param CommunityMessage $postBody
     * @return CommunityMessage
     */
    public function insert($communityId, $topicId, CommunityMessage $postBody, $optParams = array()) {
      $params = array('communityId' => $communityId, 'topicId' => $topicId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new CommunityMessage($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the messages of a topic of a community. (communityMessages.list)
     *
     * @param int $communityId The ID of the community which messages will be listed.
     * @param string $topicId The ID of the topic which messages will be listed.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string pageToken A continuation token that allows pagination.
     * @opt_param string maxResults The maximum number of messages to include in the response.
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @return CommunityMessageList
     */
    public function listCommunityMessages($communityId, $topicId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'topicId' => $topicId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new CommunityMessageList($data);
      } else {
        return $data;
      }
    }
    /**
     * Moves a message of the community to the trash folder. (communityMessages.delete)
     *
     * @param int $communityId The ID of the community whose message will be moved to the trash folder.
     * @param string $topicId The ID of the topic whose message will be moved to the trash folder.
     * @param string $messageId The ID of the message to be moved to the trash folder.
     */
    public function delete($communityId, $topicId, $messageId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'topicId' => $topicId, 'messageId' => $messageId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "communityTopics" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $communityTopics = $orkutService->communityTopics;
   *  </code>
   */
  class CommunityTopicsServiceResource extends apiServiceResource {


    /**
     * Adds a topic to a given community. (communityTopics.insert)
     *
     * @param int $communityId The ID of the community the topic should be added to.
     * @param CommunityTopic $postBody
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param bool isShout Whether this topic is a shout.
     * @return CommunityTopic
     */
    public function insert($communityId, CommunityTopic $postBody, $optParams = array()) {
      $params = array('communityId' => $communityId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new CommunityTopic($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a topic of a community. (communityTopics.get)
     *
     * @param int $communityId The ID of the community whose topic will be retrieved.
     * @param string $topicId The ID of the topic to get.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @return CommunityTopic
     */
    public function get($communityId, $topicId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'topicId' => $topicId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new CommunityTopic($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the topics of a community. (communityTopics.list)
     *
     * @param int $communityId The ID of the community which topics will be listed.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string pageToken A continuation token that allows pagination.
     * @opt_param string maxResults The maximum number of topics to include in the response.
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @return CommunityTopicList
     */
    public function listCommunityTopics($communityId, $optParams = array()) {
      $params = array('communityId' => $communityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new CommunityTopicList($data);
      } else {
        return $data;
      }
    }
    /**
     * Moves a topic of the community to the trash folder. (communityTopics.delete)
     *
     * @param int $communityId The ID of the community whose topic will be moved to the trash folder.
     * @param string $topicId The ID of the topic to be moved to the trash folder.
     */
    public function delete($communityId, $topicId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'topicId' => $topicId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "comments" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $comments = $orkutService->comments;
   *  </code>
   */
  class CommentsServiceResource extends apiServiceResource {


    /**
     * Inserts a new comment to an activity. (comments.insert)
     *
     * @param string $activityId The ID of the activity to contain the new comment.
     * @param Comment $postBody
     * @return Comment
     */
    public function insert($activityId, Comment $postBody, $optParams = array()) {
      $params = array('activityId' => $activityId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Comment($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves an existing comment. (comments.get)
     *
     * @param string $commentId ID of the comment to get.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @return Comment
     */
    public function get($commentId, $optParams = array()) {
      $params = array('commentId' => $commentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Comment($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of comments, possibly filtered. (comments.list)
     *
     * @param string $activityId The ID of the activity containing the comments.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string orderBy Sort search results.
     * @opt_param string pageToken A continuation token that allows pagination.
     * @opt_param string maxResults The maximum number of activities to include in the response.
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @return CommentList
     */
    public function listComments($activityId, $optParams = array()) {
      $params = array('activityId' => $activityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new CommentList($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes an existing comment. (comments.delete)
     *
     * @param string $commentId ID of the comment to remove.
     */
    public function delete($commentId, $optParams = array()) {
      $params = array('commentId' => $commentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "acl" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $acl = $orkutService->acl;
   *  </code>
   */
  class AclServiceResource extends apiServiceResource {


    /**
     * Excludes an element from the ACL of the activity. (acl.delete)
     *
     * @param string $activityId ID of the activity.
     * @param string $userId ID of the user to be removed from the activity.
     */
    public function delete($activityId, $userId, $optParams = array()) {
      $params = array('activityId' => $activityId, 'userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "communityRelated" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $communityRelated = $orkutService->communityRelated;
   *  </code>
   */
  class CommunityRelatedServiceResource extends apiServiceResource {


    /**
     * Retrieves the communities related to another one. (communityRelated.list)
     *
     * @param int $communityId The ID of the community whose related communities will be listed.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @return CommunityList
     */
    public function listCommunityRelated($communityId, $optParams = array()) {
      $params = array('communityId' => $communityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new CommunityList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "scraps" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $scraps = $orkutService->scraps;
   *  </code>
   */
  class ScrapsServiceResource extends apiServiceResource {


    /**
     * Creates a new scrap. (scraps.insert)
     *
     * @param Activity $postBody
     * @return Activity
     */
    public function insert(Activity $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Activity($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "communityPollVotes" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $communityPollVotes = $orkutService->communityPollVotes;
   *  </code>
   */
  class CommunityPollVotesServiceResource extends apiServiceResource {


    /**
     * Votes on a community poll. (communityPollVotes.insert)
     *
     * @param int $communityId The ID of the community whose poll is being voted.
     * @param string $pollId The ID of the poll being voted.
     * @param CommunityPollVote $postBody
     * @return CommunityPollVote
     */
    public function insert($communityId, $pollId, CommunityPollVote $postBody, $optParams = array()) {
      $params = array('communityId' => $communityId, 'pollId' => $pollId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new CommunityPollVote($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "communities" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $communities = $orkutService->communities;
   *  </code>
   */
  class CommunitiesServiceResource extends apiServiceResource {


    /**
     * Retrieves the communities an user is member of. (communities.list)
     *
     * @param string $userId The ID of the user whose communities will be listed. Can be me to refer to caller.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string orderBy How to order the communities by.
     * @opt_param string maxResults The maximum number of communities to include in the response.
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @return CommunityList
     */
    public function listCommunities($userId, $optParams = array()) {
      $params = array('userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new CommunityList($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the profile of a community. (communities.get)
     *
     * @param int $communityId The ID of the community to get.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string hl Specifies the interface language (host language) of your user interface.
     * @return Community
     */
    public function get($communityId, $optParams = array()) {
      $params = array('communityId' => $communityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Community($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "communityFollow" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $communityFollow = $orkutService->communityFollow;
   *  </code>
   */
  class CommunityFollowServiceResource extends apiServiceResource {


    /**
     * Adds an user as a follower of a community. (communityFollow.insert)
     *
     * @param int $communityId ID of the community.
     * @param string $userId ID of the user.
     * @return CommunityMembers
     */
    public function insert($communityId, $userId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new CommunityMembers($data);
      } else {
        return $data;
      }
    }
    /**
     * Removes an user from the followers of a community. (communityFollow.delete)
     *
     * @param int $communityId ID of the community.
     * @param string $userId ID of the user.
     */
    public function delete($communityId, $userId, $optParams = array()) {
      $params = array('communityId' => $communityId, 'userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "activityVisibility" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $activityVisibility = $orkutService->activityVisibility;
   *  </code>
   */
  class ActivityVisibilityServiceResource extends apiServiceResource {


    /**
     * Updates the visibility of an existing activity. This method supports patch semantics.
     * (activityVisibility.patch)
     *
     * @param string $activityId ID of the activity.
     * @param Visibility $postBody
     * @return Visibility
     */
    public function patch($activityId, Visibility $postBody, $optParams = array()) {
      $params = array('activityId' => $activityId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Visibility($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the visibility of an existing activity. (activityVisibility.update)
     *
     * @param string $activityId ID of the activity.
     * @param Visibility $postBody
     * @return Visibility
     */
    public function update($activityId, Visibility $postBody, $optParams = array()) {
      $params = array('activityId' => $activityId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Visibility($data);
      } else {
        return $data;
      }
    }
    /**
     * Gets the visibility of an existing activity. (activityVisibility.get)
     *
     * @param string $activityId ID of the activity to get the visibility.
     * @return Visibility
     */
    public function get($activityId, $optParams = array()) {
      $params = array('activityId' => $activityId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Visibility($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "badges" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $badges = $orkutService->badges;
   *  </code>
   */
  class BadgesServiceResource extends apiServiceResource {


    /**
     * Retrieves the list of visible badges of a user. (badges.list)
     *
     * @param string $userId The id of the user whose badges will be listed. Can be me to refer to caller.
     * @return BadgeList
     */
    public function listBadges($userId, $optParams = array()) {
      $params = array('userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BadgeList($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a badge from a user. (badges.get)
     *
     * @param string $userId The ID of the user whose badges will be listed. Can be me to refer to caller.
     * @param string $badgeId The ID of the badge that will be retrieved.
     * @return Badge
     */
    public function get($userId, $badgeId, $optParams = array()) {
      $params = array('userId' => $userId, 'badgeId' => $badgeId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Badge($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "counters" collection of methods.
   * Typical usage is:
   *  <code>
   *   $orkutService = new apiOrkutService(...);
   *   $counters = $orkutService->counters;
   *  </code>
   */
  class CountersServiceResource extends apiServiceResource {


    /**
     * Retrieves the counters of an user. (counters.list)
     *
     * @param string $userId The ID of the user whose counters will be listed. Can be me to refer to caller.
     * @return Counters
     */
    public function listCounters($userId, $optParams = array()) {
      $params = array('userId' => $userId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Counters($data);
      } else {
        return $data;
      }
    }
  }



/**
 * Service definition for Orkut (v2).
 *
 * <p>
 * Lets you manage activities, comments and badges in Orkut. More stuff coming in time.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://code.google.com/apis/orkut/v2/reference.html" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class apiOrkutService extends apiService {
  public $communityMembers;
  public $activities;
  public $communityPollComments;
  public $communityPolls;
  public $communityMessages;
  public $communityTopics;
  public $comments;
  public $acl;
  public $communityRelated;
  public $scraps;
  public $communityPollVotes;
  public $communities;
  public $communityFollow;
  public $activityVisibility;
  public $badges;
  public $counters;
  /**
   * Constructs the internal representation of the Orkut service.
   *
   * @param apiClient apiClient
   */
  public function __construct(apiClient $apiClient) {
    $this->rpcPath = '/rpc';
    $this->restBasePath = '/orkut/v2/';
    $this->version = 'v2';
    $this->serviceName = 'orkut';

    $apiClient->addService($this->serviceName, $this->version);
    $this->communityMembers = new CommunityMembersServiceResource($this, $this->serviceName, 'communityMembers', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "userId": {"required": true, "type": "string", "location": "path"}}, "id": "orkut.communityMembers.insert", "httpMethod": "POST", "path": "communities/{communityId}/members/{userId}", "response": {"$ref": "CommunityMembers"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "userId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "communities/{communityId}/members/{userId}", "id": "orkut.communityMembers.delete"}, "list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "friendsOnly": {"type": "boolean", "location": "query"}, "communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "hl": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "minimum": "1", "type": "integer", "location": "query"}}, "id": "orkut.communityMembers.list", "httpMethod": "GET", "path": "communities/{communityId}/members", "response": {"$ref": "CommunityMembersList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "userId": {"required": true, "type": "string", "location": "path"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.communityMembers.get", "httpMethod": "GET", "path": "communities/{communityId}/members/{userId}", "response": {"$ref": "CommunityMembers"}}}}', true));
    $this->activities = new ActivitiesServiceResource($this, $this->serviceName, 'activities', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"collection": {"required": true, "enum": ["all", "scraps", "stream"], "location": "path", "type": "string"}, "pageToken": {"type": "string", "location": "query"}, "userId": {"required": true, "type": "string", "location": "path"}, "hl": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "maximum": "100", "minimum": "1", "location": "query", "type": "integer"}}, "id": "orkut.activities.list", "httpMethod": "GET", "path": "people/{userId}/activities/{collection}", "response": {"$ref": "ActivityList"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"activityId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "activities/{activityId}", "id": "orkut.activities.delete"}}}', true));
    $this->communityPollComments = new CommunityPollCommentsServiceResource($this, $this->serviceName, 'communityPollComments', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "pollId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "CommunityPollComment"}, "id": "orkut.communityPollComments.insert", "httpMethod": "POST", "path": "communities/{communityId}/polls/{pollId}/comments", "response": {"$ref": "CommunityPollComment"}}, "list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "hl": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "minimum": "1", "type": "integer", "location": "query"}, "pollId": {"required": true, "type": "string", "location": "path"}}, "id": "orkut.communityPollComments.list", "httpMethod": "GET", "path": "communities/{communityId}/polls/{pollId}/comments", "response": {"$ref": "CommunityPollCommentList"}}}}', true));
    $this->communityPolls = new CommunityPollsServiceResource($this, $this->serviceName, 'communityPolls', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "communityId": {"required": true, "type": "string", "location": "path"}, "hl": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "minimum": "1", "type": "integer", "location": "query"}}, "id": "orkut.communityPolls.list", "httpMethod": "GET", "path": "communities/{communityId}/polls", "response": {"$ref": "CommunityPollList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "hl": {"type": "string", "location": "query"}, "pollId": {"required": true, "type": "string", "location": "path"}}, "id": "orkut.communityPolls.get", "httpMethod": "GET", "path": "communities/{communityId}/polls/{pollId}", "response": {"$ref": "CommunityPoll"}}}}', true));
    $this->communityMessages = new CommunityMessagesServiceResource($this, $this->serviceName, 'communityMessages', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"topicId": {"format": "uint64", "required": true, "type": "string", "location": "path"}, "communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}}, "request": {"$ref": "CommunityMessage"}, "id": "orkut.communityMessages.insert", "httpMethod": "POST", "path": "communities/{communityId}/topics/{topicId}/messages", "response": {"$ref": "CommunityMessage"}}, "list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "hl": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "maximum": "100", "minimum": "1", "location": "query", "type": "integer"}, "topicId": {"format": "uint64", "required": true, "type": "string", "location": "path"}}, "id": "orkut.communityMessages.list", "httpMethod": "GET", "path": "communities/{communityId}/topics/{topicId}/messages", "response": {"$ref": "CommunityMessageList"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"topicId": {"format": "uint64", "required": true, "type": "string", "location": "path"}, "communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "messageId": {"format": "uint64", "required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "communities/{communityId}/topics/{topicId}/messages/{messageId}", "id": "orkut.communityMessages.delete"}}}', true));
    $this->communityTopics = new CommunityTopicsServiceResource($this, $this->serviceName, 'communityTopics', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"isShout": {"type": "boolean", "location": "query"}, "communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}}, "request": {"$ref": "CommunityTopic"}, "id": "orkut.communityTopics.insert", "httpMethod": "POST", "path": "communities/{communityId}/topics", "response": {"$ref": "CommunityTopic"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"topicId": {"format": "uint64", "required": true, "type": "string", "location": "path"}, "communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}}, "httpMethod": "DELETE", "path": "communities/{communityId}/topics/{topicId}", "id": "orkut.communityTopics.delete"}, "list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "hl": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "maximum": "100", "minimum": "1", "location": "query", "type": "integer"}}, "id": "orkut.communityTopics.list", "httpMethod": "GET", "path": "communities/{communityId}/topics", "response": {"$ref": "CommunityTopicList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"topicId": {"format": "uint64", "required": true, "type": "string", "location": "path"}, "communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.communityTopics.get", "httpMethod": "GET", "path": "communities/{communityId}/topics/{topicId}", "response": {"$ref": "CommunityTopic"}}}}', true));
    $this->comments = new CommentsServiceResource($this, $this->serviceName, 'comments', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"activityId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Comment"}, "id": "orkut.comments.insert", "httpMethod": "POST", "path": "activities/{activityId}/comments", "response": {"$ref": "Comment"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"commentId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "comments/{commentId}", "id": "orkut.comments.delete"}, "list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"orderBy": {"default": "DESCENDING_SORT", "enum": ["ascending", "descending"], "location": "query", "type": "string"}, "pageToken": {"type": "string", "location": "query"}, "activityId": {"required": true, "type": "string", "location": "path"}, "hl": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "minimum": "1", "type": "integer", "location": "query"}}, "id": "orkut.comments.list", "httpMethod": "GET", "path": "activities/{activityId}/comments", "response": {"$ref": "CommentList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"commentId": {"required": true, "type": "string", "location": "path"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.comments.get", "httpMethod": "GET", "path": "comments/{commentId}", "response": {"$ref": "Comment"}}}}', true));
    $this->acl = new AclServiceResource($this, $this->serviceName, 'acl', json_decode('{"methods": {"delete": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"activityId": {"required": true, "type": "string", "location": "path"}, "userId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "activities/{activityId}/acl/{userId}", "id": "orkut.acl.delete"}}}', true));
    $this->communityRelated = new CommunityRelatedServiceResource($this, $this->serviceName, 'communityRelated', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.communityRelated.list", "httpMethod": "GET", "path": "communities/{communityId}/related", "response": {"$ref": "CommunityList"}}}}', true));
    $this->scraps = new ScrapsServiceResource($this, $this->serviceName, 'scraps', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "request": {"$ref": "Activity"}, "response": {"$ref": "Activity"}, "httpMethod": "POST", "path": "activities/scraps", "id": "orkut.scraps.insert"}}}', true));
    $this->communityPollVotes = new CommunityPollVotesServiceResource($this, $this->serviceName, 'communityPollVotes', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "pollId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "CommunityPollVote"}, "id": "orkut.communityPollVotes.insert", "httpMethod": "POST", "path": "communities/{communityId}/polls/{pollId}/votes", "response": {"$ref": "CommunityPollVote"}}}}', true));
    $this->communities = new CommunitiesServiceResource($this, $this->serviceName, 'communities', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"orderBy": {"enum": ["id", "ranked"], "type": "string", "location": "query"}, "userId": {"required": true, "type": "string", "location": "path"}, "hl": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "minimum": "1", "type": "integer", "location": "query"}}, "id": "orkut.communities.list", "httpMethod": "GET", "path": "people/{userId}/communities", "response": {"$ref": "CommunityList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "hl": {"type": "string", "location": "query"}}, "id": "orkut.communities.get", "httpMethod": "GET", "path": "communities/{communityId}", "response": {"$ref": "Community"}}}}', true));
    $this->communityFollow = new CommunityFollowServiceResource($this, $this->serviceName, 'communityFollow', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "userId": {"required": true, "type": "string", "location": "path"}}, "id": "orkut.communityFollow.insert", "httpMethod": "POST", "path": "communities/{communityId}/followers/{userId}", "response": {"$ref": "CommunityMembers"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"communityId": {"format": "int32", "required": true, "type": "integer", "location": "path"}, "userId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE", "path": "communities/{communityId}/followers/{userId}", "id": "orkut.communityFollow.delete"}}}', true));
    $this->activityVisibility = new ActivityVisibilityServiceResource($this, $this->serviceName, 'activityVisibility', json_decode('{"methods": {"get": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"activityId": {"required": true, "type": "string", "location": "path"}}, "id": "orkut.activityVisibility.get", "httpMethod": "GET", "path": "activities/{activityId}/visibility", "response": {"$ref": "Visibility"}}, "update": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"activityId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Visibility"}, "id": "orkut.activityVisibility.update", "httpMethod": "PUT", "path": "activities/{activityId}/visibility", "response": {"$ref": "Visibility"}}, "patch": {"scopes": ["https://www.googleapis.com/auth/orkut"], "parameters": {"activityId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Visibility"}, "id": "orkut.activityVisibility.patch", "httpMethod": "PATCH", "path": "activities/{activityId}/visibility", "response": {"$ref": "Visibility"}}}}', true));
    $this->badges = new BadgesServiceResource($this, $this->serviceName, 'badges', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"userId": {"required": true, "type": "string", "location": "path"}}, "id": "orkut.badges.list", "httpMethod": "GET", "path": "people/{userId}/badges", "response": {"$ref": "BadgeList"}}, "get": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"userId": {"required": true, "type": "string", "location": "path"}, "badgeId": {"format": "int64", "required": true, "type": "string", "location": "path"}}, "id": "orkut.badges.get", "httpMethod": "GET", "path": "people/{userId}/badges/{badgeId}", "response": {"$ref": "Badge"}}}}', true));
    $this->counters = new CountersServiceResource($this, $this->serviceName, 'counters', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/orkut", "https://www.googleapis.com/auth/orkut.readonly"], "parameters": {"userId": {"required": true, "type": "string", "location": "path"}}, "id": "orkut.counters.list", "httpMethod": "GET", "path": "people/{userId}/counters", "response": {"$ref": "Counters"}}}}', true));
  }
}

class Acl extends apiModel {
  protected $__itemsType = 'AclItems';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $description;
  public $totalParticipants;
  public function setItems(/* array(AclItems) */ $items) {
    $this->assertIsArray($items, 'AclItems', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setTotalParticipants($totalParticipants) {
    $this->totalParticipants = $totalParticipants;
  }
  public function getTotalParticipants() {
    return $this->totalParticipants;
  }
}

class AclItems extends apiModel {
  public $type;
  public $id;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class Activity extends apiModel {
  public $kind;
  protected $__linksType = 'OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  public $title;
  protected $__objectType = 'ActivityObject';
  protected $__objectDataType = '';
  public $object;
  public $updated;
  protected $__actorType = 'OrkutAuthorResource';
  protected $__actorDataType = '';
  public $actor;
  protected $__accessType = 'Acl';
  protected $__accessDataType = '';
  public $access;
  public $verb;
  public $published;
  public $id;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLinks(/* array(OrkutLinkResource) */ $links) {
    $this->assertIsArray($links, 'OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setObject(ActivityObject $object) {
    $this->object = $object;
  }
  public function getObject() {
    return $this->object;
  }
  public function setUpdated($updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
  public function setActor(OrkutAuthorResource $actor) {
    $this->actor = $actor;
  }
  public function getActor() {
    return $this->actor;
  }
  public function setAccess(Acl $access) {
    $this->access = $access;
  }
  public function getAccess() {
    return $this->access;
  }
  public function setVerb($verb) {
    $this->verb = $verb;
  }
  public function getVerb() {
    return $this->verb;
  }
  public function setPublished($published) {
    $this->published = $published;
  }
  public function getPublished() {
    return $this->published;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class ActivityList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'Activity';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(Activity) */ $items) {
    $this->assertIsArray($items, 'Activity', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class ActivityObject extends apiModel {
  public $content;
  protected $__itemsType = 'OrkutActivityobjectsResource';
  protected $__itemsDataType = 'array';
  public $items;
  protected $__repliesType = 'ActivityObjectReplies';
  protected $__repliesDataType = '';
  public $replies;
  public $objectType;
  public function setContent($content) {
    $this->content = $content;
  }
  public function getContent() {
    return $this->content;
  }
  public function setItems(/* array(OrkutActivityobjectsResource) */ $items) {
    $this->assertIsArray($items, 'OrkutActivityobjectsResource', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setReplies(ActivityObjectReplies $replies) {
    $this->replies = $replies;
  }
  public function getReplies() {
    return $this->replies;
  }
  public function setObjectType($objectType) {
    $this->objectType = $objectType;
  }
  public function getObjectType() {
    return $this->objectType;
  }
}

class ActivityObjectReplies extends apiModel {
  public $totalItems;
  protected $__itemsType = 'Comment';
  protected $__itemsDataType = 'array';
  public $items;
  public $url;
  public function setTotalItems($totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
  public function setItems(/* array(Comment) */ $items) {
    $this->assertIsArray($items, 'Comment', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class Badge extends apiModel {
  public $badgeSmallLogo;
  public $kind;
  public $description;
  public $sponsorLogo;
  public $sponsorName;
  public $badgeLargeLogo;
  public $caption;
  public $sponsorUrl;
  public $id;
  public function setBadgeSmallLogo($badgeSmallLogo) {
    $this->badgeSmallLogo = $badgeSmallLogo;
  }
  public function getBadgeSmallLogo() {
    return $this->badgeSmallLogo;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setSponsorLogo($sponsorLogo) {
    $this->sponsorLogo = $sponsorLogo;
  }
  public function getSponsorLogo() {
    return $this->sponsorLogo;
  }
  public function setSponsorName($sponsorName) {
    $this->sponsorName = $sponsorName;
  }
  public function getSponsorName() {
    return $this->sponsorName;
  }
  public function setBadgeLargeLogo($badgeLargeLogo) {
    $this->badgeLargeLogo = $badgeLargeLogo;
  }
  public function getBadgeLargeLogo() {
    return $this->badgeLargeLogo;
  }
  public function setCaption($caption) {
    $this->caption = $caption;
  }
  public function getCaption() {
    return $this->caption;
  }
  public function setSponsorUrl($sponsorUrl) {
    $this->sponsorUrl = $sponsorUrl;
  }
  public function getSponsorUrl() {
    return $this->sponsorUrl;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class BadgeList extends apiModel {
  protected $__itemsType = 'Badge';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(Badge) */ $items) {
    $this->assertIsArray($items, 'Badge', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Comment extends apiModel {
  protected $__inReplyToType = 'CommentInReplyTo';
  protected $__inReplyToDataType = '';
  public $inReplyTo;
  public $kind;
  protected $__linksType = 'OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  protected $__actorType = 'OrkutAuthorResource';
  protected $__actorDataType = '';
  public $actor;
  public $content;
  public $published;
  public $id;
  public function setInReplyTo(CommentInReplyTo $inReplyTo) {
    $this->inReplyTo = $inReplyTo;
  }
  public function getInReplyTo() {
    return $this->inReplyTo;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLinks(/* array(OrkutLinkResource) */ $links) {
    $this->assertIsArray($links, 'OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
  public function setActor(OrkutAuthorResource $actor) {
    $this->actor = $actor;
  }
  public function getActor() {
    return $this->actor;
  }
  public function setContent($content) {
    $this->content = $content;
  }
  public function getContent() {
    return $this->content;
  }
  public function setPublished($published) {
    $this->published = $published;
  }
  public function getPublished() {
    return $this->published;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class CommentInReplyTo extends apiModel {
  public $type;
  public $href;
  public $ref;
  public $rel;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setHref($href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setRef($ref) {
    $this->ref = $ref;
  }
  public function getRef() {
    return $this->ref;
  }
  public function setRel($rel) {
    $this->rel = $rel;
  }
  public function getRel() {
    return $this->rel;
  }
}

class CommentList extends apiModel {
  public $nextPageToken;
  protected $__itemsType = 'Comment';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $previousPageToken;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(Comment) */ $items) {
    $this->assertIsArray($items, 'Comment', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPreviousPageToken($previousPageToken) {
    $this->previousPageToken = $previousPageToken;
  }
  public function getPreviousPageToken() {
    return $this->previousPageToken;
  }
}

class Community extends apiModel {
  public $category;
  public $kind;
  public $member_count;
  public $description;
  public $language;
  protected $__linksType = 'OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  public $creation_date;
  protected $__ownerType = 'OrkutAuthorResource';
  protected $__ownerDataType = '';
  public $owner;
  protected $__moderatorsType = 'OrkutAuthorResource';
  protected $__moderatorsDataType = 'array';
  public $moderators;
  public $location;
  protected $__co_ownersType = 'OrkutAuthorResource';
  protected $__co_ownersDataType = 'array';
  public $co_owners;
  public $photo_url;
  public $id;
  public $name;
  public function setCategory($category) {
    $this->category = $category;
  }
  public function getCategory() {
    return $this->category;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMember_count($member_count) {
    $this->member_count = $member_count;
  }
  public function getMember_count() {
    return $this->member_count;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setLanguage($language) {
    $this->language = $language;
  }
  public function getLanguage() {
    return $this->language;
  }
  public function setLinks(/* array(OrkutLinkResource) */ $links) {
    $this->assertIsArray($links, 'OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
  public function setCreation_date($creation_date) {
    $this->creation_date = $creation_date;
  }
  public function getCreation_date() {
    return $this->creation_date;
  }
  public function setOwner(OrkutAuthorResource $owner) {
    $this->owner = $owner;
  }
  public function getOwner() {
    return $this->owner;
  }
  public function setModerators(/* array(OrkutAuthorResource) */ $moderators) {
    $this->assertIsArray($moderators, 'OrkutAuthorResource', __METHOD__);
    $this->moderators = $moderators;
  }
  public function getModerators() {
    return $this->moderators;
  }
  public function setLocation($location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setCo_owners(/* array(OrkutAuthorResource) */ $co_owners) {
    $this->assertIsArray($co_owners, 'OrkutAuthorResource', __METHOD__);
    $this->co_owners = $co_owners;
  }
  public function getCo_owners() {
    return $this->co_owners;
  }
  public function setPhoto_url($photo_url) {
    $this->photo_url = $photo_url;
  }
  public function getPhoto_url() {
    return $this->photo_url;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class CommunityList extends apiModel {
  protected $__itemsType = 'Community';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(Community) */ $items) {
    $this->assertIsArray($items, 'Community', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class CommunityMembers extends apiModel {
  protected $__communityMembershipStatusType = 'CommunityMembershipStatus';
  protected $__communityMembershipStatusDataType = '';
  public $communityMembershipStatus;
  protected $__personType = 'OrkutActivitypersonResource';
  protected $__personDataType = '';
  public $person;
  public $kind;
  public function setCommunityMembershipStatus(CommunityMembershipStatus $communityMembershipStatus) {
    $this->communityMembershipStatus = $communityMembershipStatus;
  }
  public function getCommunityMembershipStatus() {
    return $this->communityMembershipStatus;
  }
  public function setPerson(OrkutActivitypersonResource $person) {
    $this->person = $person;
  }
  public function getPerson() {
    return $this->person;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class CommunityMembersList extends apiModel {
  public $nextPageToken;
  public $kind;
  protected $__itemsType = 'CommunityMembers';
  protected $__itemsDataType = 'array';
  public $items;
  public $prevPageToken;
  public $lastPageToken;
  public $firstPageToken;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setItems(/* array(CommunityMembers) */ $items) {
    $this->assertIsArray($items, 'CommunityMembers', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
  public function setLastPageToken($lastPageToken) {
    $this->lastPageToken = $lastPageToken;
  }
  public function getLastPageToken() {
    return $this->lastPageToken;
  }
  public function setFirstPageToken($firstPageToken) {
    $this->firstPageToken = $firstPageToken;
  }
  public function getFirstPageToken() {
    return $this->firstPageToken;
  }
}

class CommunityMembershipStatus extends apiModel {
  public $status;
  public $isFollowing;
  public $isRestoreAvailable;
  public $isModerator;
  public $kind;
  public $isCoOwner;
  public $canCreatePoll;
  public $canShout;
  public $isOwner;
  public $canCreateTopic;
  public $isTakebackAvailable;
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setIsFollowing($isFollowing) {
    $this->isFollowing = $isFollowing;
  }
  public function getIsFollowing() {
    return $this->isFollowing;
  }
  public function setIsRestoreAvailable($isRestoreAvailable) {
    $this->isRestoreAvailable = $isRestoreAvailable;
  }
  public function getIsRestoreAvailable() {
    return $this->isRestoreAvailable;
  }
  public function setIsModerator($isModerator) {
    $this->isModerator = $isModerator;
  }
  public function getIsModerator() {
    return $this->isModerator;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setIsCoOwner($isCoOwner) {
    $this->isCoOwner = $isCoOwner;
  }
  public function getIsCoOwner() {
    return $this->isCoOwner;
  }
  public function setCanCreatePoll($canCreatePoll) {
    $this->canCreatePoll = $canCreatePoll;
  }
  public function getCanCreatePoll() {
    return $this->canCreatePoll;
  }
  public function setCanShout($canShout) {
    $this->canShout = $canShout;
  }
  public function getCanShout() {
    return $this->canShout;
  }
  public function setIsOwner($isOwner) {
    $this->isOwner = $isOwner;
  }
  public function getIsOwner() {
    return $this->isOwner;
  }
  public function setCanCreateTopic($canCreateTopic) {
    $this->canCreateTopic = $canCreateTopic;
  }
  public function getCanCreateTopic() {
    return $this->canCreateTopic;
  }
  public function setIsTakebackAvailable($isTakebackAvailable) {
    $this->isTakebackAvailable = $isTakebackAvailable;
  }
  public function getIsTakebackAvailable() {
    return $this->isTakebackAvailable;
  }
}

class CommunityMessage extends apiModel {
  public $body;
  public $kind;
  protected $__linksType = 'OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  protected $__authorType = 'OrkutAuthorResource';
  protected $__authorDataType = '';
  public $author;
  public $id;
  public $addedDate;
  public $isSpam;
  public $subject;
  public function setBody($body) {
    $this->body = $body;
  }
  public function getBody() {
    return $this->body;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLinks(/* array(OrkutLinkResource) */ $links) {
    $this->assertIsArray($links, 'OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
  public function setAuthor(OrkutAuthorResource $author) {
    $this->author = $author;
  }
  public function getAuthor() {
    return $this->author;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setAddedDate($addedDate) {
    $this->addedDate = $addedDate;
  }
  public function getAddedDate() {
    return $this->addedDate;
  }
  public function setIsSpam($isSpam) {
    $this->isSpam = $isSpam;
  }
  public function getIsSpam() {
    return $this->isSpam;
  }
  public function setSubject($subject) {
    $this->subject = $subject;
  }
  public function getSubject() {
    return $this->subject;
  }
}

class CommunityMessageList extends apiModel {
  public $nextPageToken;
  public $kind;
  protected $__itemsType = 'CommunityMessage';
  protected $__itemsDataType = 'array';
  public $items;
  public $prevPageToken;
  public $lastPageToken;
  public $firstPageToken;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setItems(/* array(CommunityMessage) */ $items) {
    $this->assertIsArray($items, 'CommunityMessage', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
  public function setLastPageToken($lastPageToken) {
    $this->lastPageToken = $lastPageToken;
  }
  public function getLastPageToken() {
    return $this->lastPageToken;
  }
  public function setFirstPageToken($firstPageToken) {
    $this->firstPageToken = $firstPageToken;
  }
  public function getFirstPageToken() {
    return $this->firstPageToken;
  }
}

class CommunityPoll extends apiModel {
  protected $__linksType = 'OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  public $isMultipleAnswers;
  protected $__imageType = 'CommunityPollImage';
  protected $__imageDataType = '';
  public $image;
  public $endingTime;
  public $isVotingAllowedForNonMembers;
  public $isSpam;
  public $totalNumberOfVotes;
  protected $__authorType = 'OrkutAuthorResource';
  protected $__authorDataType = '';
  public $author;
  public $question;
  public $id;
  public $isRestricted;
  public $communityId;
  public $isUsersVotePublic;
  public $lastUpdate;
  public $description;
  public $votedOptions;
  public $isOpenForVoting;
  public $isClosed;
  public $hasVoted;
  public $kind;
  public $creationTime;
  protected $__optionsType = 'OrkutCommunitypolloptionResource';
  protected $__optionsDataType = 'array';
  public $options;
  public function setLinks(/* array(OrkutLinkResource) */ $links) {
    $this->assertIsArray($links, 'OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
  public function setIsMultipleAnswers($isMultipleAnswers) {
    $this->isMultipleAnswers = $isMultipleAnswers;
  }
  public function getIsMultipleAnswers() {
    return $this->isMultipleAnswers;
  }
  public function setImage(CommunityPollImage $image) {
    $this->image = $image;
  }
  public function getImage() {
    return $this->image;
  }
  public function setEndingTime($endingTime) {
    $this->endingTime = $endingTime;
  }
  public function getEndingTime() {
    return $this->endingTime;
  }
  public function setIsVotingAllowedForNonMembers($isVotingAllowedForNonMembers) {
    $this->isVotingAllowedForNonMembers = $isVotingAllowedForNonMembers;
  }
  public function getIsVotingAllowedForNonMembers() {
    return $this->isVotingAllowedForNonMembers;
  }
  public function setIsSpam($isSpam) {
    $this->isSpam = $isSpam;
  }
  public function getIsSpam() {
    return $this->isSpam;
  }
  public function setTotalNumberOfVotes($totalNumberOfVotes) {
    $this->totalNumberOfVotes = $totalNumberOfVotes;
  }
  public function getTotalNumberOfVotes() {
    return $this->totalNumberOfVotes;
  }
  public function setAuthor(OrkutAuthorResource $author) {
    $this->author = $author;
  }
  public function getAuthor() {
    return $this->author;
  }
  public function setQuestion($question) {
    $this->question = $question;
  }
  public function getQuestion() {
    return $this->question;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIsRestricted($isRestricted) {
    $this->isRestricted = $isRestricted;
  }
  public function getIsRestricted() {
    return $this->isRestricted;
  }
  public function setCommunityId($communityId) {
    $this->communityId = $communityId;
  }
  public function getCommunityId() {
    return $this->communityId;
  }
  public function setIsUsersVotePublic($isUsersVotePublic) {
    $this->isUsersVotePublic = $isUsersVotePublic;
  }
  public function getIsUsersVotePublic() {
    return $this->isUsersVotePublic;
  }
  public function setLastUpdate($lastUpdate) {
    $this->lastUpdate = $lastUpdate;
  }
  public function getLastUpdate() {
    return $this->lastUpdate;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setVotedOptions(/* array(int) */ $votedOptions) {
    $this->assertIsArray($votedOptions, 'int', __METHOD__);
    $this->votedOptions = $votedOptions;
  }
  public function getVotedOptions() {
    return $this->votedOptions;
  }
  public function setIsOpenForVoting($isOpenForVoting) {
    $this->isOpenForVoting = $isOpenForVoting;
  }
  public function getIsOpenForVoting() {
    return $this->isOpenForVoting;
  }
  public function setIsClosed($isClosed) {
    $this->isClosed = $isClosed;
  }
  public function getIsClosed() {
    return $this->isClosed;
  }
  public function setHasVoted($hasVoted) {
    $this->hasVoted = $hasVoted;
  }
  public function getHasVoted() {
    return $this->hasVoted;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setCreationTime($creationTime) {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime() {
    return $this->creationTime;
  }
  public function setOptions(/* array(OrkutCommunitypolloptionResource) */ $options) {
    $this->assertIsArray($options, 'OrkutCommunitypolloptionResource', __METHOD__);
    $this->options = $options;
  }
  public function getOptions() {
    return $this->options;
  }
}

class CommunityPollComment extends apiModel {
  public $body;
  public $kind;
  public $addedDate;
  public $id;
  protected $__authorType = 'OrkutAuthorResource';
  protected $__authorDataType = '';
  public $author;
  public function setBody($body) {
    $this->body = $body;
  }
  public function getBody() {
    return $this->body;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setAddedDate($addedDate) {
    $this->addedDate = $addedDate;
  }
  public function getAddedDate() {
    return $this->addedDate;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setAuthor(OrkutAuthorResource $author) {
    $this->author = $author;
  }
  public function getAuthor() {
    return $this->author;
  }
}

class CommunityPollCommentList extends apiModel {
  public $nextPageToken;
  public $kind;
  protected $__itemsType = 'CommunityPollComment';
  protected $__itemsDataType = 'array';
  public $items;
  public $prevPageToken;
  public $lastPageToken;
  public $firstPageToken;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setItems(/* array(CommunityPollComment) */ $items) {
    $this->assertIsArray($items, 'CommunityPollComment', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
  public function setLastPageToken($lastPageToken) {
    $this->lastPageToken = $lastPageToken;
  }
  public function getLastPageToken() {
    return $this->lastPageToken;
  }
  public function setFirstPageToken($firstPageToken) {
    $this->firstPageToken = $firstPageToken;
  }
  public function getFirstPageToken() {
    return $this->firstPageToken;
  }
}

class CommunityPollImage extends apiModel {
  public $url;
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class CommunityPollList extends apiModel {
  public $nextPageToken;
  public $kind;
  protected $__itemsType = 'CommunityPoll';
  protected $__itemsDataType = 'array';
  public $items;
  public $prevPageToken;
  public $lastPageToken;
  public $firstPageToken;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setItems(/* array(CommunityPoll) */ $items) {
    $this->assertIsArray($items, 'CommunityPoll', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
  public function setLastPageToken($lastPageToken) {
    $this->lastPageToken = $lastPageToken;
  }
  public function getLastPageToken() {
    return $this->lastPageToken;
  }
  public function setFirstPageToken($firstPageToken) {
    $this->firstPageToken = $firstPageToken;
  }
  public function getFirstPageToken() {
    return $this->firstPageToken;
  }
}

class CommunityPollVote extends apiModel {
  public $kind;
  public $optionIds;
  public $isVotevisible;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setOptionIds(/* array(int) */ $optionIds) {
    $this->assertIsArray($optionIds, 'int', __METHOD__);
    $this->optionIds = $optionIds;
  }
  public function getOptionIds() {
    return $this->optionIds;
  }
  public function setIsVotevisible($isVotevisible) {
    $this->isVotevisible = $isVotevisible;
  }
  public function getIsVotevisible() {
    return $this->isVotevisible;
  }
}

class CommunityTopic extends apiModel {
  public $body;
  public $lastUpdate;
  public $kind;
  protected $__linksType = 'OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  protected $__authorType = 'OrkutAuthorResource';
  protected $__authorDataType = '';
  public $author;
  public $title;
  protected $__messagesType = 'CommunityMessage';
  protected $__messagesDataType = 'array';
  public $messages;
  public $latestMessageSnippet;
  public $isClosed;
  public $numberOfReplies;
  public $id;
  public function setBody($body) {
    $this->body = $body;
  }
  public function getBody() {
    return $this->body;
  }
  public function setLastUpdate($lastUpdate) {
    $this->lastUpdate = $lastUpdate;
  }
  public function getLastUpdate() {
    return $this->lastUpdate;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLinks(/* array(OrkutLinkResource) */ $links) {
    $this->assertIsArray($links, 'OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
  public function setAuthor(OrkutAuthorResource $author) {
    $this->author = $author;
  }
  public function getAuthor() {
    return $this->author;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setMessages(/* array(CommunityMessage) */ $messages) {
    $this->assertIsArray($messages, 'CommunityMessage', __METHOD__);
    $this->messages = $messages;
  }
  public function getMessages() {
    return $this->messages;
  }
  public function setLatestMessageSnippet($latestMessageSnippet) {
    $this->latestMessageSnippet = $latestMessageSnippet;
  }
  public function getLatestMessageSnippet() {
    return $this->latestMessageSnippet;
  }
  public function setIsClosed($isClosed) {
    $this->isClosed = $isClosed;
  }
  public function getIsClosed() {
    return $this->isClosed;
  }
  public function setNumberOfReplies($numberOfReplies) {
    $this->numberOfReplies = $numberOfReplies;
  }
  public function getNumberOfReplies() {
    return $this->numberOfReplies;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class CommunityTopicList extends apiModel {
  public $nextPageToken;
  public $kind;
  protected $__itemsType = 'CommunityTopic';
  protected $__itemsDataType = 'array';
  public $items;
  public $prevPageToken;
  public $lastPageToken;
  public $firstPageToken;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setItems(/* array(CommunityTopic) */ $items) {
    $this->assertIsArray($items, 'CommunityTopic', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setPrevPageToken($prevPageToken) {
    $this->prevPageToken = $prevPageToken;
  }
  public function getPrevPageToken() {
    return $this->prevPageToken;
  }
  public function setLastPageToken($lastPageToken) {
    $this->lastPageToken = $lastPageToken;
  }
  public function getLastPageToken() {
    return $this->lastPageToken;
  }
  public function setFirstPageToken($firstPageToken) {
    $this->firstPageToken = $firstPageToken;
  }
  public function getFirstPageToken() {
    return $this->firstPageToken;
  }
}

class Counters extends apiModel {
  protected $__itemsType = 'OrkutCounterResource';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(OrkutCounterResource) */ $items) {
    $this->assertIsArray($items, 'OrkutCounterResource', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class OrkutActivityobjectsResource extends apiModel {
  public $displayName;
  protected $__linksType = 'OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  public $content;
  protected $__personType = 'OrkutActivitypersonResource';
  protected $__personDataType = '';
  public $person;
  public $id;
  public $objectType;
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setLinks(/* array(OrkutLinkResource) */ $links) {
    $this->assertIsArray($links, 'OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
  public function setContent($content) {
    $this->content = $content;
  }
  public function getContent() {
    return $this->content;
  }
  public function setPerson(OrkutActivitypersonResource $person) {
    $this->person = $person;
  }
  public function getPerson() {
    return $this->person;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setObjectType($objectType) {
    $this->objectType = $objectType;
  }
  public function getObjectType() {
    return $this->objectType;
  }
}

class OrkutActivitypersonResource extends apiModel {
  protected $__nameType = 'OrkutActivitypersonResourceName';
  protected $__nameDataType = '';
  public $name;
  public $url;
  public $gender;
  protected $__imageType = 'OrkutActivitypersonResourceImage';
  protected $__imageDataType = '';
  public $image;
  public $birthday;
  public $id;
  public function setName(OrkutActivitypersonResourceName $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
  public function setGender($gender) {
    $this->gender = $gender;
  }
  public function getGender() {
    return $this->gender;
  }
  public function setImage(OrkutActivitypersonResourceImage $image) {
    $this->image = $image;
  }
  public function getImage() {
    return $this->image;
  }
  public function setBirthday($birthday) {
    $this->birthday = $birthday;
  }
  public function getBirthday() {
    return $this->birthday;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class OrkutActivitypersonResourceImage extends apiModel {
  public $url;
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class OrkutActivitypersonResourceName extends apiModel {
  public $givenName;
  public $familyName;
  public function setGivenName($givenName) {
    $this->givenName = $givenName;
  }
  public function getGivenName() {
    return $this->givenName;
  }
  public function setFamilyName($familyName) {
    $this->familyName = $familyName;
  }
  public function getFamilyName() {
    return $this->familyName;
  }
}

class OrkutAuthorResource extends apiModel {
  public $url;
  protected $__imageType = 'OrkutAuthorResourceImage';
  protected $__imageDataType = '';
  public $image;
  public $displayName;
  public $id;
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
  public function setImage(OrkutAuthorResourceImage $image) {
    $this->image = $image;
  }
  public function getImage() {
    return $this->image;
  }
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class OrkutAuthorResourceImage extends apiModel {
  public $url;
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class OrkutCommunitypolloptionResource extends apiModel {
  protected $__imageType = 'OrkutCommunitypolloptionResourceImage';
  protected $__imageDataType = '';
  public $image;
  public $optionId;
  public $description;
  public $numberOfVotes;
  public function setImage(OrkutCommunitypolloptionResourceImage $image) {
    $this->image = $image;
  }
  public function getImage() {
    return $this->image;
  }
  public function setOptionId($optionId) {
    $this->optionId = $optionId;
  }
  public function getOptionId() {
    return $this->optionId;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setNumberOfVotes($numberOfVotes) {
    $this->numberOfVotes = $numberOfVotes;
  }
  public function getNumberOfVotes() {
    return $this->numberOfVotes;
  }
}

class OrkutCommunitypolloptionResourceImage extends apiModel {
  public $url;
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class OrkutCounterResource extends apiModel {
  public $total;
  protected $__linkType = 'OrkutLinkResource';
  protected $__linkDataType = '';
  public $link;
  public $name;
  public function setTotal($total) {
    $this->total = $total;
  }
  public function getTotal() {
    return $this->total;
  }
  public function setLink(OrkutLinkResource $link) {
    $this->link = $link;
  }
  public function getLink() {
    return $this->link;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class OrkutLinkResource extends apiModel {
  public $href;
  public $type;
  public $rel;
  public $title;
  public function setHref($href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setRel($rel) {
    $this->rel = $rel;
  }
  public function getRel() {
    return $this->rel;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
}

class Visibility extends apiModel {
  public $kind;
  public $visibility;
  protected $__linksType = 'OrkutLinkResource';
  protected $__linksDataType = 'array';
  public $links;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setVisibility($visibility) {
    $this->visibility = $visibility;
  }
  public function getVisibility() {
    return $this->visibility;
  }
  public function setLinks(/* array(OrkutLinkResource) */ $links) {
    $this->assertIsArray($links, 'OrkutLinkResource', __METHOD__);
    $this->links = $links;
  }
  public function getLinks() {
    return $this->links;
  }
}
