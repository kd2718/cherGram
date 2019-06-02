@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALUAAAEXCAMAAADcLvXKAAAAw1BMVEX///8REiQAAAAAABZ8fYIaGhrX19fl5eWurq7AwMC9vb3r6+v29vbHx8efn5+JiYm2traoqKj4+PiIiIjNzc1mZmaTk5Pq6uqtra3j4+PT09OgoKDGxsZxcXFFRUWZmZkTExMyMjI6OjpdXV16enpMTEwoKCh4eHgAABlHR0cfHx9jY2Nubm4AABMNDQ1UVFQ2NjYAAAtqanJ1dXxFRlBUU10uLzyjo6qMjZRZWGIYGiltbnaGhowiIjA6O0ReX2UqKjXZLJRAAAAUPElEQVR4nO1dCXeiSret7AREQBlFUQZFxIlIzNDmdqeH//+rvlMYMzqln62Vt7LXvTFRkt4eT525Csa+8IUvfOELX/jCF77whS984QhQxvKpKfwFZghPTeHj0DEYnJrDxyHDw6k5fBwqgk/IOu5V0Nx9me7/eyofQDq1sduI2EBwBDJ7YxD6UHdeZUgwj0Bmb0wcP7N2XaTRkhVJRXR4fmHsuipMVKGWbBN1P8x3XOTDdYqj0NkTLmI5jnZc1B+zLD4KnT1hZh1Z2fHptyE30T4On/3gDbx2bQfrZMo6sI/DZz+Ew9T1oW27JEClnYoVq0ReWNO2u5ksZGavfixCe2HWmdbYVr9nQmu29nCfR4QNcxowtLZcMnOYZQllrclcm3mVRVvMmgWdGcPp8SjtgTbUsMoaw40X2PBYxeoqR+S0G+bMTAN9i+OLyeR1TFSOyGk36pGVBrLX2/S6Doqsws7kmJx2I53Gjio7GxebIZHxcArnmJx2o2+khuobmzyfhlRnNQW147LahcxqeGoz3aS3aY+WoWGK5c4ZQ7XwVM3Y4ESacOjtOGJFqXyxuWNi7aG69uUworVod2Y7c53jogI54bKerOVVoTyHInBFMLtHTsbnrL3CW/dqY8Az3FZdOjKrXTAhR7Qa4+G6Up8PhQtZHQhm91gncQeeWakb69Zbf6DzhyrcI7PaBadfLWLTb1lrnKO8TLp0weI9Qp5afWKtrqsbFI/yz8WK9whR3WsQa9d970faKxsOseI9xhk5eWzKtv++QDnoLx+D7UnlKYBaI6ybMnufObqPz/hpcnxa26HDHw+Jtf0+cxz3l66ldSVU+YajAq2XxmabWL9xji6M0uz5sVh5Lkcb9qRk3UzeOMcoTErWYTw7BbGtUGFLJWslT1+9UIOBGblztyFaQkCwJF1yYtO1Paf/6oWkkeZA1IIlnGOkVHZcmZSsnc4rSxFwri3MAPEcI6UqDbm3ZG12Xz5/VRa0ZczysHESYlvRSIMrp266er320jnWHgNqGYpY3ZglBp6aGHWzpqky9Oenrx57B02YL58WBVnLGnMN0Yjgc7MoQHPpc5RCtIyxBExvwFk3eQL59GxCok65jhSWaBljCd4kIg0h1uy551jjYrevLJK/Kl7kVIYhYZ/rNQl20lk9G5VmQ5fGUeQJFzmxMgzpT7msiXW06jm6jxquddERq/H1CDIcUcOoKzXima+KwePG47qskAURqZ+7Qhssy5es/ZW1cFFdBXlGPTsZtS0IwJA7dSXwWbX+mO8OGk9+pXq1tkpyaphL1qYrM9NcRqRtBE8msC1eaM1BoRHCJWvlMd8tps8Vv46AkROh0ytZKzWZWXJpmmW0nxdgIl5ozRGPdQz5apTtulbai/6LFq4mYGjNYRTainVH5hz9l0RFDK050kazZB2QrF1ews5fjlwM0o2/eFKEod81jJhkrcdmjwcerWetFlVB2DSVQXGIpVBa0Cg8Noy85/r6rqGRk6HvtLuhUVfbsmYmuaNTjPcceBSb+72nReHVJNJrs9rW1G4aelkLWFk7TbRu3RPGcSANnZK1WzjJTAEkPJYYhFUQlljVSVqybsqpB0nTVaKdlJlAIex4c9ZSH1lXmp4Hnhe4kGYzmbVrwioIk0xzMnRihVjrXgyddzSIdhethimsglCya5KsOWufdWoUiPDclmhLsIS1IMTasibcN6quzyyyey7jaVhAut0W1cUQ0Ok8sTYZ2p2qzjNdEwNxLQixrtel0OuUrFVeW+jXZB70pa1IzCCVw4blZanjGS1XtmXG55l7ssmLCYJmMSV0Yj0Zei235so6syPKEvWJlvZ0Fgs2MfQSTXQ8aRib1SoFfUye8shU69kJzEzINHeJCmKjm6dOx+Syrg3LmlMzrKAm2mjFS/jwDOSp11FrssbUdFw+q9UcIQtlK8jwPGnqxJYZyLqtOpOn50WspK7QhtfzEpK1WZU12XraolQTsdT+BGINK2tQCqbKmpbEK9aN/tZfOzFqxJrsReJZZrtp0w/LYrW+x/aZE6JKRKWZmSOy3CajUHVpOUT25oxP1no8vnPMSTc1dZLx0iFGglYUHmFKzqyLIo2blC8i6y/nFipi7dZ4BytzMPHJsdD3ZkLEyxqwJ9oc3Bt0ein4Jget47OKEjT4nL6ud0XsarxAHA0f/Yk19X0EA+Kruvtsdjwl4kG48oKVq0EU9w2mt4ZibYx5D6+fr1g3AwdenrK+L2Lj/BWcRuMp4vCLxEj7RqSKNmr9Dumw/yJOagzJU7YG4ubmjwjT4mV0lxJrV3Bjzfi45+Ala6+OsZgdxleYOhGxtuNB4nBrZ1noSGJtUluHwkigViB59SvuzFULlogzCm8w8K4gz3K3EdsG0fWtLBU6sl5iHPckS1IljbVZZjDbkjZsihAKSX0S9o2JzByd8QSXIr9TU9oDV1bXiQyJjAdjvPmvQNw62TMypdvIw7gsVfdzzlrEcZA3sGF20UKHK3ObtwYET72WsKDO4PWR8CnbkEKRT8G6hyokWCElMeDVdrf1CVjXgABSN3F9tVr6FvczyLqYctYvjgVpfwLWPsV3NWItYRV6NAXue60QjgPwdpc0kVbncIh1RMg6aJTcos1Zd4u4V+q1JuoYyzO8iQzInLU0S/whr98E4tsQmPmMsyar1+1CllV6I8LrdQc+MSZxu5qVoVuOhQyqome66DhL1uVmURL4WNZQEzwnUFDhplp+HGLRc8xI4K7g0ZPkeUvWUnf5hIoZb56L2xtlvFHeLP0LX42PSboW8bKC0E2CiRGXltrnAiddrnB9DqH2RO59PYpaQmBi1s10eoarxqTeELlLIHmlqIl2WolIoYmy1eI71TyB66lLA0IKQu4lkz0yHgrRHjI2FDkQQcxbX0AWRQnQCsjqeUQ70bVAXNPncVGjX132bxWEfm+GtHSXTNjitQZzuDrXULMCLUfP7wOkIAaWwxYioh+RRyzLvXLY0gxIZgE5LZ1kP7cELama8JMye9HDls4507cpghh8BlGSxYxEdNQ74CcQuIYeLzkzrtIti1wjkwMxFXuQ+MgoHnXbJl6cRGBCMTDTWWW661TEU8BDs1dat0qBV81QE26BhpjlJxdBWuqAi+TNZJNTpggijuXrcKrcMlMa8N7CXTVMXjsbC9cDK66a4Js04nVzTT5qEQlauIw3RiXhE03eekORZi5C+jyEOliXn2nncK3tbIj9dagFpbt9oTag20gDHiWZG49ecUjYChPr9K9p1sSYz+ptHP8g+5FFJHKBOkoK/AG5ax1b3Eijz0/R6ovjaJqwYi7EwbbwyIVPn4RAFahkIHMbHW8ftEGr0RPI0XjQpIwr9fbgyLjiO+hFmXOXEQx5hWay47wpmVTEYnVBzpSRwho3es7OqVlY+YC4CzF9PZxpPMSQd5eWnIFK72zrSbbHggm5z8PTZPdAAqk1vbVcAPcoo2Nx19LaZ1CPQqihCBGUjKHM9YOfnLsbhRN3Kfw7tWLHSH1w+7H5oNeX6GTtk5dFdGuGKuUoaVkG2ec3uO1TWHG6sojfGQCebaBL8YcdbjwJ+DVQLUIW73nxgWFXh4DktO0W39NqMF/dN9jvp/UuC04QrepmAfQVTTOnxFmakStP432Hqrlia/rRZxHlHBi6etvrATOpO+PbcFV1su+cHlfsgHWPO9YXRCiqepDjEb2cL8JC3rvEa6OWeCw95jFPcoSw4qecbrcwWoG/jDu0xgeKM0l92GDV4+3zsYeYNmtjojxVXolWtYb75yfhsCORxI8VisgztOWE1iG3Fq9sgOduOyP/DYw+/2Cc7oHZbYCJXA/JoTRlg2/HQJY+pSSO3N3f2XmFQuqhralO/QN0YPkz9H0FGHtqu12NB5gEWplvO/vcYmgFZ2pRmOW1sfNOOf93WFBVQK3NED/VzbUUYZOLLJY/UC0oDIOCp9hxMf7XmzlcmCauKkM4rxRaxkAjG1b9SKuZV6Ca/ODJymBz6eQg0GAEGDR7s7fdew0Nuc80dX+9ppAPpT+PJ66Jyb9M14vEp88T0XsjSxqdWsxNOmt+ay3CQsUy27Xrjhwi/GcRiYLK1aSJtf4shkYmYe9DUZu8HvyUybeZ2/1XNVa+rRx+b8MOYVipw/aeYZ9GtKhfVbfTfzTeHGY+Wvmm4NLLZLBOd78/VYMrdd948wDRP9CSCtzBePNJej4tL3fX7ZweYcOguPw5v5RbKmWQ2kQ6fBcyH7sIthgpmIVX2S9/zTMTKKcttGrdMOqBb17xOxkk3UPT1uAmubHlXISp4zXYXufFVFGdlWvapBAsGwwoQh+oQQ8uS7IDK4knydjaknX6rR7r7jEbpPMRcpK0myGvlSxtN8VE9VBnswOfSN+1wmhr+ByPze5epi/sddDVmYP8hT7oDlIFceWwoWtZCth684Z6ZILtcUhxGyYvnBRvYxYZhYWgc9C5gPrEhbxVa70Bsd5joulq2KA1PXhvjDRMHejZIc9/6jtcsbflS2lel0jgu/6QihZ6LFxnbCqIe+lB9/NK5qBR3WqNoziMmLeTdc8p0A7WdzdaqEPLDhdw23DhtbaWilDthbtdehsW2Y9NGUyW9uIDVlo1UuqWdbXlChn8OJCdNiQtQgTWprBAgZEdsLTDWZvmtsKSQSZEZthlQxB3wTYWi3V+4MXbmwP8PThrZc2tP17QUQoyCyq2HxpTIc0Nt0w9JQaCw53gzfU63vbZWWiDG0Z9+51LzJkB09m8ZNM8sQ7YPuU2ZMtxrTasfHkn8e2HQntFH36y+RKvKOL24Vg3hjHIMm1SkQY5odmA8pEdHdtwmFDSszltiQdTChwP5h4VUmxabBtsaR3yZKYxzbLD7adl9Z1M2taOoc8i3usm2ftBh9tLabGt1ewW1Aa9pzCz0h1ma+BIvW0udjiMlAPKmjXG/GY76bpcxoPiUCykIM2yHSWCwpGu5C2m6MpDrX3ADgLlVwUZ48Y7payMefdcpbxvj7JCw8m2yZoSalQOOoKRosmDSwPhyw+wMkTf5UNjwV4FuzSPuvJmvQ34XUSMg07Cd/s+dK0q99BQS+K23IkQBXVcaayzV3OUWVGOymYzM80pAosOWq+sYFiJmJ/L7nNjw6vWQYmT3d/ztlgUg0HONqmSRglDfftNeT8OGVON8sJ6Ers11TRNVbXKViMzyyOG9oGOGMrGuy6HVxa0g2868GeTsi5pTrtLWXdzleR3tZ92lIicrNHesBxlVCdTVhx8istuIFy6CF1ut2X+j5sJ8g94BWtiwO6uf5dSw4Lf/BfjULUe+upKVDqZPAw/tB9Dp6CvZa71IxShwGHpvxner035qV6pMywmwKD10dbbcOyA9dYEozmFVcm+0wN/AdvtpNN+I7Xcv+gWNmFJQ/1dAdWm6Dyf6RQVHITiweGhCqv9JnOsQmrmPZ1tL16cEkkUwJTRe151tQip1uc99Uy4eziuoKNfg6fnyOJAll2FVvTUZ9yk+p7AJ1E2MXCzrN30yjYr+tajRTFNMTekPEJPYMboWRXbfiHbmpUIqx9LeCjUWALGqbIy3fp4vRkXCX4DiaU6GWlIY+law9o/7pYeBBWDCFd9a7Lc5KZdCTSQvRW1nG9mIxtCmlFv9Y4wB3AY2B1M7JwXUoZVcTeYvocdTewZ6YbREfzMz9ew4bVIzNWpcHustoIMHuVvWiL+4XevAJXvQpmIMEP+AeQ5N3pXn0zWJiqQ2VTYm5+shw45c4S9VdVGJEYHlHsJtDFsH1ilFRkKfMuFdbBRHXZ5K+nURD4GJ9Mo4FPFPsPlHTSYHVQo6hb6wJx3qEMfZ2VN5NRMPoRkYPMOa//kW2g+BA1Ghdfti8+lJDUo5V7fXOg8/R0UqG1eSIv/4fTnP0AHqoxCZ21k4tZy3qMDS5uQk7QzAbYQ7g9+FO8QfeYKXDhbgxoivWLogh5AsxFaBEeWxzunp0QDv1FH8rlEXcL+VEr9hS984Qtf+MIXvvCFL/z/wMVnBDv/jGBnnxFfrI+HT8569Pj/80+rby/ph/MXv1K+dv7iiuNjxfrX3ehsdPft8afR9ROpy9vOzfzs/pn2+cN3uvzh+ogk32HF+tKcn80X53MS7Gh+iRbOLi/nJOf57+aD2YaOszlArwHQ/lzi9uH629a/exzWc4W+LO4Wyt38ZrH4ZcZYWIs/P+oPsUlsR8zHQqvczX80tbvK6ML/c/ff3/17o7PXqnW5+hBHb1RudHl5dklf+RWXZ+f07Zwe37Ae/X7Aze8F0PpWx3y+QHyLS+XHA777tvptpOFGxq0O++do7t9XLkdv/5F9SV/g9y/6PC+JzojojBb3JBNO6faOOJ2f0yqi/y5Ht7fx/byOh8Xcugd/HP3X+llf0X5ajTCx+Nmu14ML0vDLBbjGtH78Hp3h14JdalCMS2g3Ac5QYdfzv6JMOI+/LUb3198X/7k/H+6/3z/cQ7m+W/y5XTxc34zO7x9+LW5v7m8WuP95tvivhm83P9ybn/T448b889PFW9aXi2+LMxIzrm/mI5J163wEhVhfck3+piO2APu2QhdUvrHvf8v67KcXx/eLFmDdPtzdL/DDirm8TPz2b3FxTd+3TFRv7mLQG1rgejEHvVH8JqW9v168Yz26pV9bXNzdw7z+fXt/c2veeRc3v7FoK34VfjDSTH8Bt139T/t+of21sOHe3i1+3Cx+tO6U1u/724VycREvbu7jmJ4jZg+L+xZaNzcXv9r3d/6tf/9jYZ7zx+vF4s6/G71hfXZ+fX42v7v4cza/vvk5vx19v7id//p2dn578YsMyO/R/Mft/Az/XY+uv89v/t6AnI84uFKX33HDXy668kn68YxbsdG30i3wH8vX+OPl+fNaeuEbSz/z9OXJ0ywX3uj5tdHZ2UldzNmn9+ifCl+sj4fPyfp/X8ah1HrgsxEAAAAASUVORK5CYII=" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>22</strong> followers</div>
                <div class="pr-5"><strong>234</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)

        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" class="w-100 h-250">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection