package main
/**
 * @filename palindromic-substrings.go
 * @desc this is file description
 * @date 2020/5/27 20:10
 * @author: wsr
 */

func countSubstrings(s string) int {
    size := len(s)
    if size <= 1 {
        return 0
    }

    left := 0
    right := 0

    count := 0

    for i:=0; i<size; i++ {
        count++
        left = i -1
        right = i + 1
        for left>=0 && s[i] == s[left] {
            left--
            count++
        }

        for left>=0 &&right < size && s[left] == s[right] {
            left--
            right++
            count++
        }
    }

    return count
}
