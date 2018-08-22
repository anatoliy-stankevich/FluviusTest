<!DOCTYPE html>
<html>
<head>
	<title>1. Javascript. Тестовое задание</title>
	<script>
		function taskScript(name) {
			window.eval(document.getElementById(name).value);
		}
	</script>
</head>
<body>
	<h1>1. Javascript. Тестовое задание</h1>
	<h2>Task 1</h2>

	<p>
		1. Есть массив [10, 20, 30].
	</p>
	<p>
		Поменяйте местами 0 и 1 элементы, чтобы получилось [20, 10, 30]
	</p>
	
	<textarea style="height:200px;width:750px;overflow:auto;" id="task1">
		const list = [10, 20, 30];

		function changeElements(list) {
			list.splice(0, 2, list[1], list[0]);
		}

		changeElements(list);

		console.log(list); // [20, 10, 30];
	</textarea>

	</br>
	<button onclick="taskScript('task1')">see result!</button>
	
	<h2>Task 2</h2>

	<p>
		2. Есть массив [30, -5, 0, 10, 5].
	</p>
	<p>
		Напишите функцию сортировки от наименьшего к наибольшему, результат [-5, 0, 5, 10, 30] . Не используйте стандартную функцию sort.

	</p>
	
	<textarea style="height:200px;width:750px;overflow:auto;" id="task2">
		const list = [30, -5, 0, 10, 5]; 
		
		function mySort(list) {
			var tempList = [];
			list.forEach(function(element) {
			  tempList.push(element);
			});
			
			for(var i in list){
				let min = Math.min.apply(null,tempList);
				let index = tempList.indexOf(min);
				tempList.splice(index, 1);
				
				list.splice(i, 1, min);
			}
		}

		mySort(list);

		console.log(list); // [-5, 0, 5, 10, 30]

	</textarea>
	
	</br>
	<button onclick="taskScript('task2')">see result!</button>
	
	<h2>Task 3</h2>

	<p>
		3. Напишите свою реализацию bind.
	</p>
	
	<textarea style="height:200px;width:750px;overflow:auto;" id="task3">
		var func1 = function(message) {
			this(message);
		}

		var func2 = func1.bind(alert);
		func2('Test'); // alert 'Test'

		function myBind(func, context) {
			var bindArgs = [].slice.call(arguments, 2);
			return function() {
				var fnArgs = [].slice.call(arguments);
				return func.apply(context, bindArgs.concat(fnArgs));
			};
		}

		var func3 = myBind(func1, alert);
		func3('Test'); // alert 'Test'

	</textarea>

	</br>
	<button onclick="taskScript('task3')">see result!</button>
</body>
</html>