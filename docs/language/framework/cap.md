# 高性能

##### cap原则
- CAP原则又称CAP定理，指的是在一个分布式系统中，一致性（Consistency）、可用性（Availability）、分区容错性（Partition tolerance）。
  CAP 原则指的是，这三个要素最多只能同时实现两点，不可能三者兼顾。
  - 一致性（C）：在分布式系统中的所有数据备份，在同一时刻是否同样的值。（等同于所有节点访问同一份最新的数据副本）
  - 可用性（A）：保证每个请求不管成功或者失败都有响应。
  - 分区容忍性（P）：系统中任意信息的丢失或失败不会影响系统的继续运作。
  