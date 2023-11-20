<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFabricBlock返回参数结构体
 *
 * @method integer getBlockHeight() 获取区块高度
 * @method void setBlockHeight(integer $BlockHeight) 设置区块高度
 * @method string getBlockHash() 获取区块Hash
 * @method void setBlockHash(string $BlockHash) 设置区块Hash
 * @method string getPreBlockHash() 获取前置区块Hash
 * @method void setPreBlockHash(string $PreBlockHash) 设置前置区块Hash
 * @method integer getTxCount() 获取区块中交易数量
 * @method void setTxCount(integer $TxCount) 设置区块中交易数量
 * @method array getTransactionList() 获取区块中交易列表
 * @method void setTransactionList(array $TransactionList) 设置区块中交易列表
 * @method string getCreateTimestamp() 获取创建时间戳
 * @method void setCreateTimestamp(string $CreateTimestamp) 设置创建时间戳
 * @method string getProposerOrg() 获取提案组织
 * @method void setProposerOrg(string $ProposerOrg) 设置提案组织
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFabricBlockResponse extends AbstractModel
{
    /**
     * @var integer 区块高度
     */
    public $BlockHeight;

    /**
     * @var string 区块Hash
     */
    public $BlockHash;

    /**
     * @var string 前置区块Hash
     */
    public $PreBlockHash;

    /**
     * @var integer 区块中交易数量
     */
    public $TxCount;

    /**
     * @var array 区块中交易列表
     */
    public $TransactionList;

    /**
     * @var string 创建时间戳
     */
    public $CreateTimestamp;

    /**
     * @var string 提案组织
     */
    public $ProposerOrg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BlockHeight 区块高度
     * @param string $BlockHash 区块Hash
     * @param string $PreBlockHash 前置区块Hash
     * @param integer $TxCount 区块中交易数量
     * @param array $TransactionList 区块中交易列表
     * @param string $CreateTimestamp 创建时间戳
     * @param string $ProposerOrg 提案组织
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("BlockHeight",$param) and $param["BlockHeight"] !== null) {
            $this->BlockHeight = $param["BlockHeight"];
        }

        if (array_key_exists("BlockHash",$param) and $param["BlockHash"] !== null) {
            $this->BlockHash = $param["BlockHash"];
        }

        if (array_key_exists("PreBlockHash",$param) and $param["PreBlockHash"] !== null) {
            $this->PreBlockHash = $param["PreBlockHash"];
        }

        if (array_key_exists("TxCount",$param) and $param["TxCount"] !== null) {
            $this->TxCount = $param["TxCount"];
        }

        if (array_key_exists("TransactionList",$param) and $param["TransactionList"] !== null) {
            $this->TransactionList = [];
            foreach ($param["TransactionList"] as $key => $value){
                $obj = new Transaction();
                $obj->deserialize($value);
                array_push($this->TransactionList, $obj);
            }
        }

        if (array_key_exists("CreateTimestamp",$param) and $param["CreateTimestamp"] !== null) {
            $this->CreateTimestamp = $param["CreateTimestamp"];
        }

        if (array_key_exists("ProposerOrg",$param) and $param["ProposerOrg"] !== null) {
            $this->ProposerOrg = $param["ProposerOrg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}