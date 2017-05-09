<?php
	//php实现双向队列
	class Deque{
		private $queue = array();

		/*
		* 队头插入
		*/
		public function addFirst($item){
			return array_unshift($queue, $item);
		}

		/*
		* 队尾插入
		*/
		public function addLast($item){
			return array_push($queue, $item);
		}

		/*
		* 队头删除
		*/
		public function deleteFirst(){
			return array_shift($queue);
		}

		/*
		* 队尾删除
		*/
		public function deleteLast(){
			return array_pop($queue);
		}
	}