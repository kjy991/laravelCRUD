#### 기술과제 
1. Homestead를 이용해 라라벨 프레임 워크를 설치, 로컬에 개발환경 구축

2. Route 정의
/ -> name : list
/show/{id} -> name : show
/create -> name : create
이 세페이지를 route name으로 왔다갔다할 수 있게 정의

3. migration을 사용해 table 생성

4. 생성된 table을 바탕으로 Eloquent ORM에 post Model 만들기

5. create route에서 postModel을 생성할 수 있도록 처리.

6. list route 에서 create된 postModel List를 볼 수 있도록 처리

7. list route의 postModel을 클릭하면 show route로 이동하며 해당 post model content 출력.

8. 출력된 post model content를 수정하고 삭제할 수 있도록 구현
